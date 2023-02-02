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
use App\Models\ProfileUserCv;
use App\Models\SaveCv;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\User;
use App\Models\Wage;
use App\Models\WorkingForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public ProfileUserCv $profileCv;

    public function __construct(ProfileUserCv $profileCv, News $new, Jobseeker $Jobseeker, User $user, SaveCv $savecv, UploadCv $upload, Wage $wage, Experience $experience, Majors $majors, location $location, WorkingForm $workingform, Lever $lever, Profession $profession, Job $job, Company $company, Employer $employer, Jobskill $jobskill, Skill $skill, Timework $timework)
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
        $this->profileCv = $profileCv;
    }
    public function index(Request $request)
    {
        $cv = $this->profileCv
            ->leftjoin('job-seeker', 'job-seeker.user_role', '=', 'profile_user_cv.user_id')
            ->leftjoin('seeker_skill', 'seeker_skill.job-seeker_id', '=', 'job-seeker.id')
            ->leftjoin('skill', 'skill.id', '=', 'seeker_skill.skill_id')
            ->where([
                ['status_profile', 1],
                ['status', '!=', Auth::guard('user')->user()->id],
            ])
            ->where(function ($q) use ($request) {
                if (!empty($request['name'])) {
                    $q->Where($this->escapeLikeSentence('majors', $request['free_word']));
                }
                if (!empty($request['location'])) {
                    $q->Where('job-seeker.location_id', $request['location']);
                }
                if (!empty($request['majors'])) {
                    $q->Where('job-seeker.majors_id', $request['majors']);
                }
                if (!empty($request['profession'])) {
                    $q->Where('job-seeker.profession_id', $request['profession']);
                }
                if (!empty($request['lever'])) {
                    $q->Where('job-seeker.lever_id', $request['lever']);
                }
                if (!empty($request['experience'])) {
                    $q->Where('job-seeker.experience_id', $request['experience']);
                }
                if (!empty($request['skill'])) {
                    $q->WhereIn('seeker_skill.skill_id', $request['skill']);
                }
                if (!empty($request['timework'])) {
                    $q->Where('job-seeker.time_work_id', $request['timework']);
                }
                if (!empty($request['workingform'])) {
                    $q->Where('job-seeker.workingform_id', $request['workingform']);
                }
            })
            ->select('profile_user_cv.*')
            ->with('user')->get();
        // dd($cv);
        $breadcrumbs = [
            'Tìm kiếm ứng viên',

        ];
        return view('employer.searchcv.index', [
            'cv' => $cv,
            'request' => $request,
            'breadcrumbs' => $breadcrumbs,
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
        dd($request->all());
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