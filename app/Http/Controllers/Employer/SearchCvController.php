<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Jobseeker;
use App\Models\Jobskill;
use App\Models\Lever;
use App\Models\location;
use App\Models\Majors;
use App\Models\News;
use App\Models\Profession;
use App\Models\SaveCv;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\User;
use App\Models\Wage;
use App\Models\WorkingForm;
use Illuminate\Http\Request;

class SearchCvController extends BaseController
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
        $cv = $this->Jobseeker
            ->join('save_cv', 'job-seeker.user_role', '=', 'save_cv.user_id')
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->with('getskill')
            ->leftjoin('users', 'users.id', '=', 'job-seeker.user_role')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->leftjoin('profession', 'profession.id', '=', 'job-seeker.profession_id')
            ->leftjoin('experience', 'experience.id', '=', 'job-seeker.experience_id')
            ->leftjoin('time_work', 'time_work.id', '=', 'job-seeker.time_work_id')
            ->leftjoin('majors', 'majors.id', '=', 'job.majors_id')
            ->select('users.name as user_name', 'save_cv.status as status', 'save_cv.id as cv_id', 'save_cv.file_cv as file_cv', 'save_cv.user_id as user_id', 'job-seeker.*', 'profession.name as profession_name', 'experience.name as experience_experience', 'time_work.name as time_work_name', 'majors.name as majors_name', 'save_cv.created_at as create_at_sv')
            ->get();

        // $cv = $this->upload->with('user', function ($q) {
        //     $q->join('job-seeker', 'job-seeker.user_role', '=', 'user.id');
        // })->get();
        // dd($cv);
        return view('employer.searchcv.index', [
            'profestion' => $this->getprofession(),
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->majors->get(),
            'workingform' => $this->getworkingform(),
            'location' => $this->getlocation(),
            'cv' => $cv,
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
        //
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
}