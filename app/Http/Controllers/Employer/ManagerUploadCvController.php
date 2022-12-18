<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\SaveCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerUploadCvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public SaveCv $savecv;
    public Job $job;
    public function __construct(SaveCv $savecv, Job $job)
    {
        $this->savecv = $savecv;
        $this->job = $job;
    }
    public function index()
    {
        $cv = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')

            ->join('job-seeker', 'job-seeker.user_role', '=', 'save_cv.user_id')

            ->leftjoin('users', 'users.id', '=', 'job-seeker.user_role')

            ->join('employer', 'employer.id', '=', 'job.employer_id')

            ->leftjoin('profession', 'profession.id', '=', 'job-seeker.profession_id')

            ->leftjoin('experience', 'experience.id', '=', 'job-seeker.experience_id')

            ->leftjoin('time_work', 'time_work.id', '=', 'job-seeker.time_work_id')

            ->leftjoin('majors', 'majors.id', '=', 'job.majors_id')

            ->where('job.employer_id', Auth::guard('user')->user()->id)

            ->select('users.name as user_name', 'save_cv.status as status', 'save_cv.id as cv_id', 'save_cv.file_cv as file_cv', 'save_cv.user_id as user_id', 'job-seeker.*', 'profession.name as profession_name', 'experience.name as experience_experience', 'time_work.name as time_work_name', 'majors.name as majors_name')
            ->get();
        // dd($cv);
        return view('employer.managercv.index', [
            'cv' => $cv
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