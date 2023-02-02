<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use App\Models\Majors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $company = Company::with('employer.job')
            ->where(function ($q) use ($search) {
                if ($search) {
                    $q->where('name', 'LIKE', '%' . $search . '%');
                }
            })->get();
        return view('client.company.getCompany', [
            'company' => $company,
            'request' => $request,


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
    public function jobManager()
    {
        return view('client.job-manager.index', [
            'title' => 'Việc làm quản lý ',
            'majors' => Majors::all(),
        ]);
    }

    public function detailCompany($id)
    {
        $jobCompany = Job::select(
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
            ->where('company.id', $id)
            ->with(['getWage', 'getlocation', 'getMajors'])
            ->get();
        return view('client.company.index', ['company' => Company::where('id', $id)->first(), 'job' => $jobCompany, 'majors' => Majors::all()]);
    }
}