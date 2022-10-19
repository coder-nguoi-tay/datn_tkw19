<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployerCreateRequest;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Jobskill;
use App\Models\Lever;
use App\Models\location;
use App\Models\Majors;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\Timework;
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

    public function __construct(Lever $lever, Experience $experience, Wage $wage, Skill $skill, Timework $timework, Profession $profession, Jobskill $jobskill, Job $job, Majors $majors, Employer $employer, Company $company, location $location, WorkingForm $workingform)
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
    }
    public function index()
    {
        return view('employer.new.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.new.create', [
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform(),
            // 'user' =>  $this->user->where('id', Auth::guard('user')->user()->id)->getProfile()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployerCreateRequest $request)
    {
        try {
            //create to job
            $job = new $this->job();
            $job->title = $request->title;
            $job->quatity = $request->quatity;
            $job->sex = $request->sex;
            $job->describe = $request->describe;
            $job->level_id = $request->level_id;
            $job->experience_id = $request->experience_id;
            $job->wage_id = $request->Wage_id;
            $job->skill_id = 1;
            $job->benefit = $request->benefit;
            $job->profession_id = $request->profession_id;
            $job->location_id = $request->location_id;
            $job->address = $request->address;
            $job->majors_id = $request->majors_id;
            $job->wk_form_id = $request->wk_form_id;
            $job->job_time = Carbon::now();
            $job->end_job_time = $request->end_job_time;
            $job->time_work_id = $request->time_work_id;
            $job->candidate_requirements = $request->candidate_requirements;
            $job->employer_id = $request->id_Employer;
            $job->save();
            //create to jobskill
            if ($request->skill_id) {
                foreach ($request->skill_id as $item) {
                    $this->jobskill->create([
                        'job_id' => $job->id,
                        'skill_id' => $item
                    ])->save();
                }
            }
            //create to company
            $company = new $this->company();
            $company->name = $request->name;
            $company->address = $request->address;
            $company->Introduce = 1;
            $company->Desceibe = $request->Desceibe;
            $company->number_member = $request->number_member;
            $company->email = $request->emailCompany;
            $company->logo = $request->logo;
            $company->save();
            // update employer
            $employer = $this->employer->where('id', $request->id_Employer)->first();
            $employer->name = $request->nameEmployer;
            $employer->phone = $request->phone;
            $employer->address = $request->address;
            $employer->id_company = $company->id;
            $employer->save();
            $this->setFlash(__('Thêm Tin thành công'));
            return redirect()->back();
        } catch (\Throwable $th) {
            return DB::rollback();
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