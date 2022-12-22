<?php

namespace App\Http\Controllers\Employer;

use App\Enums\StatusCode;
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

    public function __construct(User $user, Lever $lever, Experience $experience, Wage $wage, Skill $skill, Timework $timework, Profession $profession, Jobskill $jobskill, Job $job, Majors $majors, Employer $employer, Company $company, location $location, WorkingForm $workingform)
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
    }
    public function index()
    {
        $date = getdate();
        $m = $date['mon'];
        $y = $date['year'];
        $all_day = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        $mon = Carbon::parse(new Carbon('last day of last month'))->format('d');
        $checkCompany = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        $job = $this->job->where('employer_id', Auth::guard('user')->user()->id)
            ->with(['getWage', 'getlocation', 'getskill'])
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->select('job.*', 'company.logo as logo')
            ->Orderby('created_at', 'DESC')
            ->get();
        return view('employer.new.index', [
            'job' => $job,
            'all_day' => $all_day,
            'm' => $m,
            'mon' => $mon,
            'title' => 'Tin Tuyển Dụng',
            'checkCompany' => $checkCompany,
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
        $end_time = Carbon::parse($request['data']['end_job_time'])->format('Y-m-d');
        $employer = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        try {
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
            $job->status = 1;
            $job->save();
            //create to jobskill
            foreach ($request['skill'] as $item) {
                $this->jobskill->create([
                    'job_id' => $job->id,
                    'skill_id' => $item['value']
                ])->save();
            }
            return response()->json([
                'status' => StatusCode::OK
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'status' => StatusCode::FORBIDDEN
            ]);
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
    public function edit(Job $job)
    {
        return view('employer.new.edit', [
            'job' => $job->with('getskill')->get(),
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
                ->where('users.id', 1)
                ->get(),
            'company' => $this->employer->where('user_id', 1)
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->get()
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
        dd($request->all());
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
}