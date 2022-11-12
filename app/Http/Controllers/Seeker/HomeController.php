<?php

namespace App\Http\Controllers\Seeker;

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
use App\Models\User;
use App\Models\Wage;
use App\Models\WorkingForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
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

    public function __construct(Jobseeker $Jobseeker, User $user, Lever $lever, Experience $experience, Wage $wage, Skill $skill, Timework $timework, Profession $profession, Jobskill $jobskill, Job $job, Majors $majors, Employer $employer, Company $company, location $location, WorkingForm $workingform, SeekerSkill $SeekerSkill)
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
        $this->Jobseer = $SeekerSkill;
        $this->Jobseeker = $Jobseeker;
    }
    public function index()
    {
        $breadcrumbs = [
            'Thông tin cá nhân'
        ];
        $user =  $this->user
            ->join('job-seeker', 'job-seeker.user_role', '=', 'users.id')
            ->where('users.id', Auth::guard('user')->user()->id)
            ->with('getskill')
            ->first();
        // dd($user);
        return view('client.seeker.profile', [
            'user' => $user,
            'breadcrumbs' => $breadcrumbs,
            'lever' => $this->getlever(),
            'experience' => $this->getexperience(),
            'wage' => $this->getwage(),
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $images = 'http://vn.blog.kkday.com/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg';
        try {
            $Jobseeker = $this->Jobseeker->create([
                'address' => $request->address,
                'phone' => $request->phone,
                'images' => $images,
                'user_role' => Auth::guard('user')->user()->id,
                'skill_id' => 1,
                'experience_id' => $request->experience_id,
                'lever_id' => $request->lever_id,
                'wage_id' => $request->wage_id,
                'profession_id' => $request->profession_id,
                'time_work_id' => $request->time_work_id,
            ]);
            $Jobseeker->save();
            foreach ($request->skill_id as $value) {
                $this->SeekerSkill->create([
                    'job-seeker_id' => $Jobseeker->id,
                    'skill_id' => $value,
                ])->save();
            }
            $this->setFlash(__('Cập nhật thành công'));
            return redirect()->route('profile.index');
        } catch (\Throwable $th) {
            DB::rollback();
            $this->setFlash(__('Thêm Thất bại'), 'error');
            return redirect()->route('profile.index');
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
    public function userProfile()
    {
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('owner.index');
    }
    public function userFavourite()
    {
        $breadcrumbs = [
            'Tin tuyển dụng yêu thích'
        ];
        return view('client.seeker.favourite', [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
    public function userFavouriteId($id)
    {
        return response()->json([
            'job' => $this->job
                ->with(['getLevel', 'getExperience', 'getWage', 'getprofession', 'getlocation', 'getMajors', 'getwk_form', 'getTime_work', 'getskill'])
                ->where('id', $id)->first()
        ]);
    }
}