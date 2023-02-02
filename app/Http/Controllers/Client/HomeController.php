<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Mail\MailNotifyCV;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Experience;
use App\Models\Favourite;
use App\Models\Job;
use App\Models\Jobseeker;
use App\Models\Jobskill;
use App\Models\Lever;
use App\Models\location;
use App\Models\Majors;
use App\Models\News;
use App\Models\Profession;
use App\Models\ProfileUserCv;
use App\Models\SaveCv;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\User;
use App\Models\Wage;
use App\Models\WorkingForm;
use Carbon\Carbon;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Str;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Job $job;
    public Company $company;
    public Employer $employer;
    public Jobskill $jobskill;
    public Majors $majors;
    public location $location;
    public WorkingForm $workingform;
    public Lever $lever;
    public Experience $experience;
    public Wage $wage;
    public Skill $skill;
    public Timework $timework;
    public Profession $profession;
    public UploadCv $upload;
    public SaveCv $savecv;
    public User $user;
    public Jobseeker $Jobseeker;
    public News $new;

    public function __construct(News $new, Jobseeker $Jobseeker, User $user, SaveCv $savecv, UploadCv $upload, Wage $wage, Experience $experience, Majors $majors, location $location, WorkingForm $workingform, Lever $lever, Profession $profession, Job $job, Company $company, Employer $employer, Jobskill $jobskill, Skill $skill, Timework $timework)
    {
        $this->new = $new;
        $this->job = $job;
        $this->company = $company;
        $this->employer = $employer;
        $this->jobskill = $jobskill;
        $this->majors = $majors;
        $this->lever = $lever;
        $this->experience = $experience;
        $this->wage = $wage;
        $this->skill = $skill;
        $this->timework = $timework;
        $this->profession = $profession;
        $this->job = $job;
        $this->jobskill = $jobskill;
        $this->majors = $majors;
        $this->employer = $employer;
        $this->location = $location;
        $this->workingform = $workingform;
        $this->upload = $upload;
        $this->savecv = $savecv;
        $this->user = $user;
        $this->Jobseeker = $Jobseeker;
    }
    public function index()
    {
        if (Auth::guard('user')->check()) {
            if (Auth::guard('user')->user()->role_id == 2) {
                return redirect(route('employer.index'));
            }
        }
        $jobForUser = $this->job
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->where([
                ['job.status', 1],
                ['job.expired', 0],
                ['job.package_id_position', 1],
                ['employer.position', 1],
            ])
            ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany')
            ->orderBy('employer.prioritize', 'desc')
            ->get();
        if (Auth::guard('user')->check()) {
            $user = $this->user->with('getProfileUse')->where('id', Auth::guard('user')->user()->id)->first();

            if ($user->getProfileUse) {
                $getskill = $this->Jobseeker->with('getskill')->where('user_role', Auth::guard('user')->user()->id)->first();
                $skill_id = $getskill->getskill->pluck('id');
                $getProfile = $user->getProfileUse;
                $job = $this->job
                    ->join('job_skill', 'job_skill.job_id', '=', 'job.id')
                    ->join('skill', 'job_skill.skill_id', '=', 'skill.id')
                    ->join('employer', 'employer.id', '=', 'job.employer_id')
                    ->join('company', 'company.id', '=', 'employer.id_company')
                    ->where([
                        ['job.status', 1],
                        ['job.expired', 0],
                        ['job.package_id_position', 1],
                        ['employer.position', 1],
                    ])
                    ->where(function ($query) use ($getProfile, $skill_id) {
                        $query->orWhere(function ($q) use ($skill_id) {
                            $q->whereIn('job_skill.skill_id', $skill_id);
                        })
                            ->orWhere(
                                'job.location_id',
                                $getProfile->location_id
                            )
                            ->orWhere(
                                'job.profession_id',
                                $getProfile->profession
                            )
                            ->orWhere(
                                'job.experience_id',
                                $getProfile->experience
                            )
                            ->orWhere(
                                'job.time_work_id',
                                $getProfile->time_work_id
                            )
                            ->orWhere(
                                'job.level_id',
                                $getProfile->lever_id
                            );
                    })
                    ->distinct()
                    ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany')
                    ->orderBy('employer.prioritize', 'desc')
                    ->get();
            } else {
                $job = $jobForUser;
            }
        } else {
            $job = $jobForUser;
        }
        $majorsALL = Majors::with('majors')->get();

        $new = News::select('id', 'title', 'profession_id', 'new_image', 'describe', 'majors', 'created_at')->paginate(4);
        $totalSeeker = User::select('id')->where('status', 2)
            ->count('id');
        $totalEmployer = User::select('id')->where('status', 2)
            ->where('role_id', '=', 2)
            ->count('id');
        $totalJob = Job::count();
        return view('client.index', [
            'majorsALL' => $majorsALL,
            'totalJob' => $totalJob,
            'totalSeeker' => $totalSeeker,
            'totalEmployer' => $totalEmployer,
            'title' => 'Tuyển dung, tìm việc làm nhanh 24h',
            'profestion' => $this->getprofession(),
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'workingform' => $this->getworkingform(),
            'location' => $this->getlocation(),
            'user' => $user ?? '',
            'job' => $job,
            'new' => $new,
            'getskill' => $getskill ?? '',
            'jobAttractive' => $this->job
                ->join('employer', 'employer.id', '=', 'job.employer_id')
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->where([
                    ['job.status', 1],
                    ['job.expired', 0],
                    ['job.package_id_position', 0],
                ])
                ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany')
                ->orderBy('employer.prioritize', 'desc')
                ->paginate(12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function show(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDetail($id)
    {
        $checklove = Favourite::where('job_id', $id)->first();
        if ($checklove) {
            $love = $checklove->job_id;
        } else {
            $love = null;
        }
        $job = $this->job
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany', 'company.address as addressCompany', 'company.Desceibe as desceibeCompany', 'company.number_member as number_member', 'company.email as emailCompany')
            ->where('job.id', $id)
            ->first();
        //tin liên quan
        $data = $this->jobskill
            ->whereIn('skill_id', $job->getskill->pluck('id'))
            ->whereNotIn('job_id', [$id])
            ->get()
            ->pluck('job_id');
        $relate = $this->job
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->whereIn('job.id', $data)
            ->where('job.expired', 0)
            ->select('job.*', 'company.logo as logo')
            ->get();
        // tin cùng cty
        $jobCompany = $this->job
            ->select(
                'job.id as idjob',
                'job.level_id as level_id',
                'job.experience_id as experience_id',
                'job.wage_id as wage_id',
                'job.profession_id as profession_id',
                'job.time_work_id as time_work_id',
                'job.employer_id as employer_id',
                'job.wk_form_id as wk_form_id',
                'job.location_id as location_id',
                'job.majors_id as majors_id',
                'job.title as title',
                'company.*',

            )
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->where('company.id', $job->idCompany)
            ->paginate(4);
        if (Auth::guard('user')->check()) {
            $cv = $this->upload->where('user_id', Auth::guard('user')->user()->id)->get();
        }
        $breadcrumbs = [
            $job->title
        ];
        return view('client.detai-job', [
            'job' => $job,
            'jobCompany' => $jobCompany,
            'locationAll' => $this->location->get(),
            'rules' => $relate,
            'breadcrumbs' => $breadcrumbs,
            'cv' => $cv ?? '',
            'majors' => $this->majors->get(),
            'checklove' => $love,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function searchMajors($id)
    {
        $job =  $this->job->where('majors_id', $id)
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->with(['getWage', 'getlocation', 'getskill', 'getprofession', 'getExperience', 'getLevel', 'getTime_work', 'getwk_form', 'getMajors'])
            ->orderby('employer.prioritize', 'asc')
            ->select('job.*', 'company.logo as logo', 'company.id as id_company', 'company.name as name_company')
            ->get();
        $breadcrumbs = [
            'Tìm kiếm việc làm'
        ];
        // dd($job);
        foreach ($job as $item) {
            $item['duration'] = Carbon::parse($item->end_job_time)->diffInRealMilliseconds(Carbon::parse(Carbon::now()));
        }
        return view('client.job-manager.index', [
            'title' => 'Việc làm quản lý',
            'majors' => Majors::all(),
            'breadcrumbs' => $breadcrumbs,
            'job' => $job,
            'total' => count($job),
        ]);
    }
    public function upCv(Request $request)
    {
        if (!Auth::guard('user')->check()) {
            $this->setFlash(__('Bạn cần đăng nhập hoặc đăng ký để trải nghiệm dịch vụ của chúng tôi'), 'error');
            return redirect()->back();
        }
        $mailUpCv = $this->savecv;

        $checkJob = $this->savecv->where([
            ['id_job', $request->id_job],
            ['user_id', Auth::guard('user')->user()->id]
        ])->first();
        if ($checkJob) {
            $this->setFlash(__('Bạn đã nộp đơn vào công việc này rồi'), 'error');
            return redirect()->back();
        }

        if (isset($request->file_cv)) {
            if ($request->save_cv) {
                try {
                    $cvSave = new $this->upload();
                    $cvSave->title = $request->title;
                    $cvSave->user_id = Auth::guard('user')->user()->id;
                    if ($request->hasFile('file_cv')) {
                        $cvSave->file_cv = $request->file_cv->storeAs('images/cv', $request->file_cv->hashName());
                    }
                    $cvSave->save();
                    //
                    $cvUpload = new $this->savecv();
                    $cvUpload->title = $request->title;
                    $cvUpload->token = rand(00000, 99999);
                    $cvUpload->user_id = Auth::guard('user')->user()->id;
                    if ($request->hasFile('file_cv')) {
                        $cvUpload->file_cv = $request->file_cv->storeAs('images/cv', $request->file_cv->hashName());
                    }
                    $cvUpload->id_job = $request->id_job;
                    $cvUpload->save();
                } catch (\Throwable $th) {
                    DB::rollBack();
                    return back();
                }
            } else {
                $cv = new $this->savecv();
                $cv->title = $request->title;
                $cv->user_id = Auth::guard('user')->user()->id;
                if ($request->hasFile('file_cv')) {
                    $cv->file_cv = $request->file_cv->storeAs('images/cv', $request->file_cv->hashName());
                }
                $cv->id_job = $request->id_job;
                $cv->save();
            }
        } else {

            $cvSave = $this->upload->where('id', $request->cv_for_save)->first();
            if ($cvSave) {
                $cvUpload = new $this->savecv();
                $cvUpload->title = $cvSave->title;
                $cvUpload->token = rand(00000, 99999);
                $cvUpload->user_id = Auth::guard('user')->user()->id;
                $cvUpload->file_cv = $cvSave->file_cv;
                $cvUpload->id_job = $request->id_job;
                $cvUpload->save();
            }
        }
        $emailCompany = $this->job->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('users', 'users.id', '=', 'employer.user_id')
            ->select('users.email as email')->first();
        $firstJob = $this->job->where([
            ['id', $request->id_job],
        ])->first();
        $mailContents = [
            'job' => $firstJob
        ];
        Mail::to($emailCompany->email)->send(new MailNotifyCV($mailContents));

        $this->setFlash(__('Hãy chờ phản hồi của nhà tuyển dụng'));
        return redirect()->back();
    }
    public function error404()
    {
        return view('errors.404');
    }
}