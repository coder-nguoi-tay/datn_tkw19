<?php

namespace App\Http\Controllers\Employer;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\AccountPayment;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Jobseeker;
use App\Models\location;
use App\Models\Majors;
use App\Models\Profession;
use App\Models\SaveCv;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\WorkingForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerUploadCvController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public SaveCv $savecv;
    public Job $job;
    public Employer $employer;
    public Jobseeker $jobseeker;
    public Skill $skill;
    public Timework $timework;
    public Profession $profession;
    public Majors $majors;
    public location $location;
    public WorkingForm $workingform;
    public UploadCv $upload;
    public function __construct(WorkingForm $workingform, location $location, Majors $majors, Profession $profession, SaveCv $savecv, Job $job, Employer $employer, Jobseeker $jobseeker, Skill $skill, Timework $timework, UploadCv $upload)
    {
        $this->savecv = $savecv;
        $this->job = $job;
        $this->employer = $employer;
        $this->jobseeker = $jobseeker;
        $this->skill = $skill;
        $this->timework = $timework;
        $this->profession = $profession;
        $this->majors = $majors;
        $this->location = $location;
        $this->workingform = $workingform;
        $this->upload = $upload;
    }
    public function index(Request $request)
    {
        $checkCompany = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        $cv = $this->jobseeker
            ->join('save_cv', 'job-seeker.user_role', '=', 'save_cv.user_id')
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->with('getskill')
            ->leftjoin('users', 'users.id', '=', 'job-seeker.user_role')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->leftjoin('profession', 'profession.id', '=', 'job-seeker.profession_id')
            ->leftjoin('experience', 'experience.id', '=', 'job-seeker.experience_id')
            ->leftjoin('time_work', 'time_work.id', '=', 'job-seeker.time_work_id')
            ->leftjoin('majors', 'majors.id', '=', 'job.majors_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) use ($request) {
                if (!empty($request['start_date'])) {
                    $q->whereDate('save_cv.created_at', '>=', $request['start_date']);
                }
                if (!empty($request['end_date'])) {
                    $q->whereDate('save_cv.created_at', '<=', $request['end_date']);
                }
                if (!empty($request['free_word'])) {
                    $q->orWhere($this->escapeLikeSentence('users.name', $request['free_word']));
                    $q->orWhere($this->escapeLikeSentence('profession.name', $request['free_word']));
                    $q->orWhere($this->escapeLikeSentence('majors.name', $request['free_word']));
                }
            })
            ->select('users.name as user_name', 'save_cv.status as status', 'save_cv.id as cv_id', 'save_cv.file_cv as file_cv', 'save_cv.user_id as user_id', 'job-seeker.*', 'profession.name as profession_name', 'experience.name as experience_experience', 'time_work.name as time_work_name', 'majors.name as majors_name', 'save_cv.created_at as create_at_sv')
            ->get();

        return view('employer.managercv.index', [
            'cv' => $cv,
            'request' => $request,
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform(),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cv = $this->upload
            ->with('proFileUser', 'user', 'getskill')
            ->join('users', 'users.id', '=', 'upload_cv.user_id')
            ->join('job-seeker', 'job-seeker.user_role', '=', 'users.id')
            ->join('time_work', 'time_work.id', '=', 'job-seeker.time_work_id')
            ->select('upload_cv.*', 'time_work.name as name_time')
            ->where('upload_cv.user_id', $id)
            ->first();
        // dd($cv);
        $accPayment = AccountPayment::where('user_id', Auth::guard('user')->user()->id)->first();
        return view('employer.managercv.showcv', [
            'cv' => $cv,
            'accPayment' => $accPayment,
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
    public function changeStatus($id)
    {
        try {
            $upcv = $this->upload->where('id', $id)->first();
            $upcv->employer_payment_cv = Auth::guard('user')->user()->id;
            $upcv->save();
            return response()->json([
                'message' => 'Mua cv thành công',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Đã có một lỗi không xác định sảy ra',
                'status' => StatusCode::FORBIDDEN,
            ], StatusCode::OK);
        }
    }
}