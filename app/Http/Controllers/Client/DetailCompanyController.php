<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class DetailCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.detail-company.index', [
            'title' => 'Thông tin công ty ',
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
        return view('client.detail-company.index', ['company' => Company::where('id', $id)->first(), 'job' => $jobCompany]);
    }
}