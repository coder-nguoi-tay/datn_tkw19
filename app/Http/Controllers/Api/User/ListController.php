<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\BaseController;
use App\Models\Experience;
use App\Models\Job;
use App\Models\location;
use App\Models\Majors;
use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Http\Request;

class ListController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Skill $skill;
    public Profession $profession;
    public Job $job;
    public location $location;
    public Majors $majors;
    public function __construct(Skill $skill, Profession $profession, Job $job, Location $location, Majors $majors)
    {
        $this->skill = $skill;
        $this->profession = $profession;
        $this->job = $job;
        $this->location = $location;
        $this->majors = $majors;
    }
    public function index()
    {
        // ngôn ngữ
        $skill = $this->skill->select('id', 'name')->get();
        // đia điểm
        $location = $this->location->select('*')->get();
        // chuyên ngành
        $profession = $this->profession->select('id', 'name')->get();
        // ngành nghề
        $profession = $this->profession->select('id', 'name')->get();
        // tack công việc
        $job = $this->job->select('*')->get();
        return response()->json([
            'job' => $job,
            'location' => $location,
            'skill' => $skill,
            'profession' => $profession,
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