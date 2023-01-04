<?php

namespace App\Http\Controllers\Employer;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployerCreateRequest;
use App\Models\Accuracy;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Jobseeker;
use App\Models\Jobskill;
use App\Models\Lever;
use App\Models\location;
use App\Models\Majors;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\User;
use App\Models\Wage;
use App\Models\WorkingForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewEmployerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Lever $lever;
    public Experience $experience;
    public Wage $wage;
    public Skill $skill;
    public Timework $timework;
    public Profession $profession;
    public Job $job;
    public Jobskill $jobskill;
    public Majors $majors;
    public Employer $employer;
    public Company $company;
    public location $location;
    public WorkingForm $workingform;
    public User $user;
    public Jobseeker $jobseeker;

    public function __construct(Jobseeker $jobseeker, User $user, Lever $lever, Experience $experience, Wage $wage, Skill $skill, Timework $timework, Profession $profession, Jobskill $jobskill, Job $job, Majors $majors, Employer $employer, Company $company, location $location, WorkingForm $workingform)
    {
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
        $this->company = $company;
        $this->location = $location;
        $this->workingform = $workingform;
        $this->user = $user;
        $this->jobseeker = $jobseeker;
    }
    public function index(Request $request)
    {
        $date = getdate();
        $m = $date['mon'];
        $y = $date['year'];
        $all_day = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        $mon = Carbon::parse(new Carbon('last day of last month'))->format('d');
        $checkCompany = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        $checkCompanyXt = Accuracy::where('user_id', Auth::guard('user')->user()->id)->first();
        if ($checkCompanyXt) {
            $checkCompanyStatus = 1;
        } else {
            $checkCompanyStatus = 0;
        }
        $job = $this->job->where([
            ['job.employer_id', $checkCompany->id],
        ])->where(function ($q) use ($request) {
            if (!empty($request['start_date'])) {
                $q->whereDate('job.job_time', '>=', $request['start_date']);
            }
            if (!empty($request['end_date'])) {
                $q->whereDate('job.end_job_time', '<=', $request['end_date']);
            }
            if (!empty($request['expired'])) {
                if ($request['expired'] == 1) {
                    $q->where('job.expired', 0);
                } else {
                    $q->where('job.expired', 1);
                }
            }
            if (!empty($request['free_word'])) {
                $q->orWhere($this->escapeLikeSentence('job.title', $request['free_word']));
            }
        })->with(['getLevel', 'getExperience', 'getWage', 'getprofession', 'getlocation', 'getMajors', 'getwk_form', 'getTime_work', 'getskill', 'AllCv'])
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->select('job.*', 'company.logo as logo')
            ->Orderby('job.expired', 'ASC')
            ->get();
        return view('employer.new.index', [
            'job' => $job,
            'all_day' => $all_day,
            'm' => $m,
            'mon' => $mon,
            'title' => 'Tin Tuyển Dụng',
            'checkCompany' => $checkCompany,
            'request' => $request,
            'checkCompanyStatus' => $checkCompanyStatus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.new.create', [
            'title' => 'Đăng tin tuyển dụng',
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform(),
            'user' =>  $this->user
                ->join('employer', 'employer.user_id', '=', 'users.id')
                ->where('users.id', Auth::guard('user')->user()->id)
                ->get(),
            'company' => $this->employer->where('user_id', Auth::guard('user')->user()->id)
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //EmployerCreateRequest
    {
        try {
            $end_time = Carbon::parse($request['data']['end_job_time'])->format('Y-m-d');
            $employer = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
            $job = new $this->job();
            $job->title = $request['data']['title'];
            $job->quatity = $request['data']['quatity'];
            $job->sex = $request['data']['sex'];
            $job->describe = $request['data']['describe'];
            $job->level_id = $request['data']['level_id'];
            $job->experience_id = $request['data']['experience_id'];
            $job->wage_id = $request['data']['wage_id'];
            $job->benefit = $request['data']['benefit'];
            $job->profession_id = $request['data']['profession_id'];
            $job->location_id = $request['data']['location_id'];
            $job->address = $request['data']['address'];
            $job->majors_id = $request['data']['majors_id'];
            $job->wk_form_id = $request['data']['wk_form_id'];
            $job->job_time = Carbon::now();
            $job->end_job_time = $end_time;
            $job->time_work_id = $request['data']['time_work_id'];
            $job->candidate_requirements = $request['data']['candidate_requirements'];
            $job->employer_id = $employer->id;
            $job->status = 0;
            $job->save();
            //create to jobskill
            foreach ($request['skill'] as $item) {
                $this->jobskill->create([
                    'job_id' => $job->id,
                    'skill_id' => $item['value']
                ])->save();
            }
            return response()->json([
                'message' => 'Cập nhật thành công',
                'status' => StatusCode::OK
            ], StatusCode::OK);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'message' => 'Đã có một lỗi xảy ra',
                'status' => StatusCode::FORBIDDEN,
            ], StatusCode::OK);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('employer.new.edit', [
            'title' => 'Sửa tin tuyển dụng',
            'job' => $this->job->with('getskill')->where([
                ['id', $id],
            ])->first(),
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform()
        ]);
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
        $end_time = Carbon::parse($request['data']['end_job_time'])->format('Y-m-d');
        try {
            $job =  $this->job->where('id', $id)->first();
            $job->title = $request['data']['title'];
            $job->quatity = $request['data']['quatity'];
            $job->sex = $request['data']['sex'];
            $job->describe = $request['data']['describe'];
            $job->level_id = $request['data']['level_id'];
            $job->experience_id = $request['data']['experience_id'];
            $job->wage_id = $request['data']['wage_id'];
            $job->benefit = $request['data']['benefit'];
            $job->profession_id = $request['data']['profession_id'];
            $job->location_id = $request['data']['location_id'];
            $job->address = $request['data']['address'];
            $job->majors_id = $request['data']['majors_id'];
            $job->wk_form_id = $request['data']['wk_form_id'];
            $job->job_time = Carbon::now();
            $job->end_job_time = $end_time;
            $job->time_work_id = $request['data']['time_work_id'];
            $job->candidate_requirements = $request['data']['candidate_requirements'];
            $job->save();
            //create to jobskill
            $jobskill =  $this->jobskill->where('job_id', $id)->get();
            foreach ($jobskill as $value) {
                $this->jobskill->find($value->id)->delete();
            }
            foreach ($request['skill'] as $item) {
                $this->jobskill->create([
                    'job_id' => $job->id,
                    'skill_id' => $item['value']
                ])->save();
            }
            return response()->json([
                'message' => 'Cập nhật thành công',
                'status' => StatusCode::OK
            ], StatusCode::OK);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'message' => 'Đã có một lỗi xảy ra',
                'status' => StatusCode::FORBIDDEN,
            ], StatusCode::FORBIDDEN);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $jobskill = $this->jobskill->where('job_id', $id)->get();
            foreach ($jobskill as $value) {
                Jobskill::destroy($value->id);
            }
            $this->job->find($id)->delete();
            $this->setFlash(__('Xóa thành công'));
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('Đã có một lỗi sảy ra'), 'error');
            return redirect()->back();
        }
    }
    public function changeStus(Request $request, $id)
    {
        try {
            $job = $this->job->where('id', $id)->first();
            $job->status = $request['data'];
            $job->save();
            return response()->json([
                'message' => 'Cập nhật thành công',
                'status' => StatusCode::OK
            ], StatusCode::OK);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'message' => 'Đã có một lỗi xảy ra',
                'status' => StatusCode::FORBIDDEN,
            ], StatusCode::FORBIDDEN);
        }
    }
    public function detailNew($id, Request $request)
    {
        $cv = $this->jobseeker
            ->join('save_cv', 'job-seeker.user_role', '=', 'save_cv.user_id')
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->leftjoin('users', 'users.id', '=', 'job-seeker.user_role')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->leftjoin('majors', 'majors.id', '=', 'job.majors_id')
            ->where('job.id', $id)
            ->where(function ($q) use ($request) {
                if (!empty($request['start_date'])) {
                    $q->whereDate('save_cv.created_at', '>=', $request['start_date']);
                }
                if (!empty($request['end_date'])) {
                    $q->whereDate('save_cv.created_at', '<=', $request['end_date']);
                }
                if (!empty($request['free_word'])) {
                    $q->orWhere($this->escapeLikeSentence('users.name', $request['free_word']));
                    $q->orWhere($this->escapeLikeSentence('majors.name', $request['free_word']));
                }
            })
            ->select('users.name as user_name', 'save_cv.status as status', 'save_cv.id as cv_id', 'save_cv.file_cv as file_cv', 'save_cv.user_id as user_id', 'job-seeker.*', 'majors.name as majors_name', 'save_cv.created_at as create_at_sv', 'save_cv.token as token')
            ->get();
        return view('employer.new.detail', ['cv' => $cv, 'id' => $id, 'request' => $request]);
    }
}