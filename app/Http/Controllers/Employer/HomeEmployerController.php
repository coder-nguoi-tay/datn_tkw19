<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\AccountPayment;
use App\Models\Employer;
use App\Models\Job;
use App\Models\location;
use App\Models\ProfileUserCv;
use App\Models\SaveCv;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeEmployerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Location $location;
    public Employer $employer;
    public User $user;
    public Job $job;
    public SaveCv $savecv;
    public ProfileUserCv $profileCv;
    public function __construct(ProfileUserCv $profileCv, location $location, Employer $employer, User $user, Job $job, SaveCv $savecv)
    {
        $this->location = $location;
        $this->employer = $employer;
        $this->user = $user;
        $this->job = $job;
        $this->savecv = $savecv;
        $this->profileCv = $profileCv;
    }
    public function index()
    {
        $checkCompany = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        $countCvMoth1 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 1);
            })
            ->count();
        $countCvMoth2 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 2);
            })
            ->count();
        $countCvMoth3 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 3);
            })
            ->count();
        $countCvMoth4 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 4);
            })
            ->count();
        $countCvMoth5 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 5);
            })
            ->count();
        $countCvMoth6 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 6);
            })
            ->count();
        $countCvMoth7 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 7);
            })
            ->count();
        $countCvMoth8 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 8);
            })
            ->count();
        $countCvMoth9 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 9);
            })
            ->count();
        $countCvMoth10 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 10);
            })
            ->count();
        $countCvMoth11 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 11);
            })
            ->count();
        $countCvMoth12 = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->where(function ($q) {
                $q->whereMonth('save_cv.created_at', 12);
            })
            ->count();
        $user = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        $job = $this->job->where('employer_id', $user->id)->count();
        $cv = $this->savecv
            ->where('user_id', $user->id)
            ->count();
        $cv = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $checkCompany->id)
            ->count();
        $tatalecv = $this->profileCv->where('status', Auth::guard('user')->user()->id)->count();
        $totalPayment = AccountPayment::where('user_id', Auth::guard('user')->user()->id)->first();
        return view('employer.dashboard.index', [
            'job' => $job,
            'cv' => $cv,
            'title' => 'Bảng tin | News',
            'tatalecv' => $tatalecv,
            'totalPayment' => $totalPayment ?? '',
            'countCvMoth1' => $countCvMoth1,
            'countCvMoth2' => $countCvMoth2,
            'countCvMoth3' => $countCvMoth3,
            'countCvMoth4' => $countCvMoth4,
            'countCvMoth5' => $countCvMoth5,
            'countCvMoth6' => $countCvMoth6,
            'countCvMoth7' => $countCvMoth7,
            'countCvMoth8' => $countCvMoth8,
            'countCvMoth9' => $countCvMoth9,
            'countCvMoth10' => $countCvMoth10,
            'countCvMoth11' => $countCvMoth11,
            'countCvMoth12' => $countCvMoth12
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
        if (!$this->checkMailUser($request)) {
            $this->setFlash(__('Email này đã được đăng ký trước đây'), 'error');
            return view('employer.pages.register', [
                'location' => $this->getlocation(),
                'request' => $request->all(),
            ]);
        }
        try {
            $user =  $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
                'status' => 2
            ]);
            $user->save();
            $employer = new $this->employer();
            $employer->name = $request->name;
            $employer->phone = $request->sdt;
            $employer->sex = $request->sex;
            $employer->namecompany = $request->company;
            $employer->workplace = $request->workplace;
            $employer->address = $request->address;
            $employer->user_id = $user->id;
            $employer->save();
            $this->setFlash(__('đăng ký tài khoản nhà tuyển dụng thành công'));
            return redirect(route('index'));
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('đã có một lỗi không xác định đã xảy ra, kiểm tra lại thông tin của bạn'), 'error');
            return view('employer.pages.register', [
                'location' => $this->getlocation(),
                'request' => $request->all(),
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
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('index');
    }
    public function register()
    {
        return view('employer.pages.register', [
            'location' => $this->getlocation()
        ]);
    }
}