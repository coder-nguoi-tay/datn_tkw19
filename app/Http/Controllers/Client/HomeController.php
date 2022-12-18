<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Jobskill;
use App\Models\Lever;
use App\Models\location;
use App\Models\Majors;
use App\Models\Profession;
use App\Models\SaveCv;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\Wage;
use App\Models\WorkingForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function __construct(SaveCv $savecv, UploadCv $upload, Wage $wage, Experience $experience, Majors $majors, location $location, WorkingForm $workingform, Lever $lever, Profession $profession, Job $job, Company $company, Employer $employer, Jobskill $jobskill, Skill $skill, Timework $timework)
    {
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
    }
    public function index()
    {
        return view('client.index', [
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
    public function showDetail($name, $id)
    {
        $job = $this->job
            // ->with(['getWage', 'getlocation', 'getskill', 'getMajors'])
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
            ->select('job.*', 'company.logo as logo')
            ->get();
        //
        $title = $this->convert_name($job->title);
        $getMajors = $this->convert_name($job->getMajors->name);
        $location = $this->convert_name($job->getlocation->name);
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
            // ->with(['getWage', 'getlocation', 'getMajors'])
            ->paginate(4);
        // tất cả cv của người tìm việc
        // dd(Auth::guard('user'));
        $cv = $this->upload->where('user_id', Auth::guard('user')->user()->id)->get();
        // dd($cv);
        $breadcrumbs = [
            $job->title
        ];
        return view('client.detai-job', [
            'job' => $job,
            'jobCompany' => $jobCompany,
            'title' => $title,
            'getMajors' => $getMajors,
            'location' => $location,
            'rules' => $relate,
            'breadcrumbs' => $breadcrumbs,
            'cv' => $cv,
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
    public function searchLocation($name, $id)
    {
        $job =  $this->job->where('location_id', $id)
            ->with(['getWage', 'getlocation', 'getskill', 'getprofession', 'getExperience', 'getLevel', 'getTime_work', 'getwk_form', 'getMajors'])
            ->paginate(10);
        $breadcrumbs = [
            'Tìm kiếm việc làm'
        ];
        return view('client.search', [
            'job' => $job,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
    public function searchMajors($name, $id)
    {
        $job =  $this->job->where('majors_id', $id)
            ->with(['getWage', 'getlocation', 'getskill', 'getprofession', 'getExperience', 'getLevel', 'getTime_work', 'getwk_form', 'getMajors'])
            ->paginate(10);
        $breadcrumbs = [
            'Tìm kiếm việc làm'
        ];
        return view('client.search', [
            'job' => $job,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
    public function searcAll(Request $request)
    {

        try {
            $that = $request;
            $data = $this->job
                ->join('job_skill', 'job_skill.job_id', '=', 'job.id')
                ->join('skill', 'job_skill.skill_id', '=', 'skill.id')
                ->Where(function ($q) use ($that) {
                    if (isset($that->key) && !isset($that->skill_id) && !isset($that->location_id)) {
                        $q->orWhere($this->escapeLikeSentence('job.title', $that->key));
                        $q->orWhere($this->escapeLikeSentence('skill.name', $that->key));
                    } else
                    if (isset($that->skill_id) && isset($that->location_id)) {
                        $q->orWhere('job_skill.skill_id', $that->skill_id)
                            ->orWhere('job.location_id', $that->location_id);
                    } else
                    if (isset($that->skill_id) && isset($that->location_id) && isset($that->key)) {
                        $q->orWhere($this->escapeLikeSentence('job.title', $that->key))
                            ->orWhere('job_skill.skill_id', $that->skill_id)
                            ->orWhere('job.location_id', $that->location_id);
                    } else 
                    if (isset($that->skill_id)) {
                        $q->Where('job_skill.skill_id', $that->skill_id);
                    } else 
                    if (isset($that->location_id)) {
                        $q->Where('job.location_id', $that->location_id);
                    }
                    $q->distinct();
                    $q->select('job.*');
                    return true;
                })
                ->distinct()
                ->select('job.*')
                ->get();
            if ($data) {
                return response()->json([
                    'data' => $data,
                    'count' => "Tìm thấy " . count($data) . " việc làm phù hợp với yêu cầu của bạn."
                ]);
            }
            return response()->json([
                'data' => [],
                'count' => "Không tìm thấy việc làm phù hợp với yêu cầu của bạn."
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Tìm kiếm không thành công'
            ]);
        }
    }
    public function showNew()
    {
        return response()->json([
            'job' => $this->job
                ->with(['getLevel', 'getExperience', 'getWage', 'getprofession', 'getlocation', 'getMajors', 'getwk_form', 'getTime_work', 'getskill'])
                ->join('employer', 'employer.id', '=', 'job.employer_id')
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany')
                ->paginate(2)
        ]);
    }
    public function upCv(Request $request)
    {
        $checkJob = $this->savecv->where('id_job', $request->id_job)->first();
        if ($checkJob) {
            return back()->with('thongbao', 'Bạn đã nộp đơn vào công việc này rồi, vui lòng thử lại cho những công việc khác');
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
                $cvUpload->user_id = $cvSave->user_id;
                $cvUpload->file_cv = $cvSave->file_cv;
                $cvUpload->id_job = $request->id_job;
                $cvUpload->save();
            }
        }
        return back();
    }
}