<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Jobskill;
use Illuminate\Http\Request;

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
    public function __construct(Job $job, Company $company, Employer $employer, Jobskill $jobskill)
    {
        $this->job = $job;
        $this->company = $company;
        $this->employer = $employer;
        $this->jobskill = $jobskill;
    }
    public function index()
    {
        return view('client.index', [
            'job' => $this->job->with(['getWage', 'getlocation', 'getskill', 'getEndTimeJob', 'getwk_form', 'getExperience', 'getprofession'])
                ->join('employer', 'employer.id', '=', 'job.employer_id')
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->select('job.*', 'company.logo as logo')
                ->paginate(5)
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
    public function showDetail($name, $id)
    {
        $job = $this->job
            ->with(['getWage', 'getlocation', 'getskill', 'getprofession', 'getExperience', 'getLevel', 'getTime_work', 'getwk_form', 'getMajors'])
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany', 'company.address as addressCompany', 'company.Desceibe as desceibeCompany', 'company.number_member as number_member', 'company.email as emailCompany')
            ->where('job.id', $id)
            ->first();
        $rules = array();
        foreach ($job->getskill as $value) {
            $relate = $this->jobskill
                ->where('skill_id', $value->pivot->skill_id)
                ->get();
            foreach ($relate as $item) {
                $test = $this->jobskill
                    ->where('job_id', $item->job_id)
                    ->get();

                foreach ($test as $item) {
                    $abc = $this->job
                        ->with(['getWage', 'getlocation', 'getskill', 'getprofession', 'getExperience', 'getLevel', 'getTime_work', 'getwk_form', 'getMajors'])
                        ->join('employer', 'employer.id', '=', 'job.employer_id')
                        ->join('company', 'company.id', '=', 'employer.id_company')
                        ->select('job.*', 'company.logo as logo')
                        ->where('job.id', $item->job_id)
                        ->get();
                }
                array_push($rules, $abc);
            }
        }
        $title = $this->convert_name($job->title);
        $getMajors = $this->convert_name($job->getMajors->name);
        $location = $this->convert_name($job->getlocation->name);
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
                'employer.*'
            )
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->where('company.id', $job->idCompany)
            ->with(['getWage', 'getlocation', 'getskill', 'getprofession', 'getExperience', 'getLevel', 'getTime_work', 'getwk_form', 'getMajors'])
            ->get();
        $breadcrumbs = [
            $job->title
        ];
        return view('client.detai-job', [
            'job' => $job,
            'jobCompany' => $jobCompany,
            'title' => $title,
            'getMajors' => $getMajors,
            'location' => $location,
            'rules' => $rules,
            'breadcrumbs' => $breadcrumbs,
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
}