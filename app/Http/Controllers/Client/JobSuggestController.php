<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
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
use App\Models\SeekerSkill;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\User;
use App\Models\Wage;
use Illuminate\Http\Request;
use App\Models\WorkingForm;
use Illuminate\Support\Facades\Auth;

class JobSuggestController extends BaseController
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
    public SeekerSkill $SeekerSkill;
    public Jobseeker $Jobseeker;
    public UploadCv $upload;

    public function __construct(UploadCv $upload, Jobseeker $Jobseeker, User $user, Lever $lever, Experience $experience, Wage $wage, Skill $skill, Timework $timework, Profession $profession, Jobskill $jobskill, Job $job, Majors $majors, Employer $employer, Company $company, location $location, WorkingForm $workingform, SeekerSkill $SeekerSkill)
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
        $this->SeekerSkill = $SeekerSkill;
        // $this->Jobseer = $SeekerSkill;
        $this->Jobseeker = $Jobseeker;
        $this->upload = $upload;
    }
    public function index()
    {
        $breadcrumbs = [
            'Gợi ý việc làm '
        ];
        $user =  $this->user
            ->with('getProfileUse')
            ->where('users.id', Auth::guard('user')->user()->id)
            ->first();
        $getskill = $this->Jobseeker->with('getskill')->where('user_role', Auth::guard('user')->user()->id)->first();
        $cv = UploadCv::where('user_id', Auth::guard('user')->user()->id)->get();
        return view('client.goi-y.index', [
            'title' => 'Gợi ý việc làm',
            'breadcrumbs' => $breadcrumbs,
            'user' => $user,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Thông tin cá nhân',
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform(),
            'getskill' => $getskill,
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
