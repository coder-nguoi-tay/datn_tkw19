<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use stdClass;

class SearchController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Job $job;
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


    public function __construct(Wage $wage, Experience $experience, Majors $majors, location $location, WorkingForm $workingform, Lever $lever, Profession $profession, Job $job, Jobskill $jobskill, Skill $skill, Timework $timework)
    {
        $this->job = $job;
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
        $this->location = $location;
        $this->workingform = $workingform;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $breadcrumbs = [
            'Tìm kiếm việc làm ' . $request->key
        ];
        try {
            $that = $request;
            $data = $this->job
                ->join('job_skill', 'job_skill.job_id', '=', 'job.id')
                ->join('skill', 'job_skill.skill_id', '=', 'skill.id')
                ->join('employer', 'employer.id', '=', 'job.employer_id')
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->Where(function ($q) use ($that) {
                    if ($that->key) {
                        $q->orWhere($this->escapeLikeSentence('job.title', $that->key));
                    }
                    if ($that->skill) {
                        $q->whereIn('job_skill.skill_id', $that->skill);
                    }
                    if ($that->location) {
                        $q->Where(
                            'job.location_id',
                            $that->location
                        );
                    }
                    if ($that->profession) {
                        $q->Where(
                            'job.profession_id',
                            $that->profession
                        );
                    }
                    if ($that->experience) {
                        $q->Where(
                            'job.experience_id',
                            $that->experience
                        );
                    }
                    if ($that->timework) {
                        $q->Where(
                            'job.time_work_id',
                            $that->timework
                        );
                    }

                    if ($that->workingform) {
                        $q->Where(
                            'job.wk_form_id',
                            $that->workingform
                        );
                    }
                    if ($that->majors) {
                        $q->Where(
                            'job.majors_id',
                            $that->majors
                        );
                    }
                    if ($that->lever) {
                        $q->Where(
                            'job.level_id',
                            $that->lever
                        );
                    }
                })
                ->where([
                    ['job.status', 1],
                    ['job.expired', 0],
                ])
                ->distinct()
                ->with(['getLevel', 'getExperience', 'getWage', 'getprofession', 'getlocation', 'getMajors', 'getwk_form', 'getTime_work', 'getskill'])
                ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany')
                ->orderBy('employer.prioritize', 'desc')
                ->get();
            $datalq = $this->job
                ->join('job_skill', 'job_skill.job_id', '=', 'job.id')
                ->join('skill', 'job_skill.skill_id', '=', 'skill.id')
                ->join('employer', 'employer.id', '=', 'job.employer_id')
                ->join('company', 'company.id', '=', 'employer.id_company')
                ->Where(function ($q) use ($that) {
                    $q->orWhere($this->escapeLikeSentence('job.title', $that->key))
                        ->orWhere(function ($q) use ($that) {
                            if ($that->skill) {
                                $q->whereIn('job_skill.skill_id', $that->skill);
                            }
                        })
                        ->orWhere(
                            'job.location_id',
                            $that->location
                        )
                        ->orWhere(
                            'job.profession_id',
                            $that->profession
                        )
                        ->orWhere(
                            'job.experience_id',
                            $that->experience
                        )
                        ->orWhere(
                            'job.time_work_id',
                            $that->timework
                        )
                        ->orWhere(
                            'job.wk_form_id',
                            $that->workingform
                        )
                        ->orWhere(
                            'job.majors_id',
                            $that->majors
                        )
                        ->orWhere(
                            'job.level_id',
                            $that->lever
                        )
                        ->orWhere(
                            'job.majors_id',
                            $that->majors
                        );
                })
                ->where([
                    ['job.status', 1],
                    ['job.expired', 0],
                ])
                ->distinct()
                ->with(['getLevel', 'getExperience', 'getWage', 'getprofession', 'getlocation', 'getMajors', 'getwk_form', 'getTime_work', 'getskill'])
                ->select('job.*', 'company.logo as logo', 'company.id as idCompany', 'company.name as nameCompany')
                ->orderBy('employer.prioritize', 'desc')
                ->get();
            if ($request->skill != null) {
                $skill = explode(',', $request->skill[0]);
                foreach ($skill as $item) {
                    $skillSearch[] = $this->skill->where('id', $item)->first();
                }
            }
            return view('client.search', [
                'job' => $data,
                'datalq' => $datalq,
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
                'request' => $request,
                'skillSearch' => $skillSearch ?? null,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show(Request $request, $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
    public function searchMajos($title, $id)
    {
        $job = $this->job->where('majors_id', $id)->get();
    }
}