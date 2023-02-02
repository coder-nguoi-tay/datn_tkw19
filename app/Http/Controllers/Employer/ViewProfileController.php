<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Majors;
use App\Models\SaveCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewProfileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Majors $majors;
    public function __construct(Majors $majors)
    {
        $this->majors = $majors;
    }
    public function index(Request $request)
    {

        $job = SaveCv::where('save_cv.user_id', Auth::guard('user')->user()->id)
            ->leftjoin('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->join('company', 'company.id', '=', 'employer.id_company')
            ->select('job.id as id', 'job.title as title', 'company.id as idCompany', 'company.logo as logo', 'company.name as nameCompany', 'save_cv.created_at as created_at')
            ->get();
        $breadcrumbs = [
            'Danh sách công việc đã nộp',

        ];

        return view('client.seeker.view-profile', [
            'title' => 'Danh sách công việc đã nộp',
            'breadcrumbs' => $breadcrumbs,
            'majors' => $this->getmajors(),
            'job' => $job,
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