<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\AccountPayment;
use App\Models\Employer;
use App\Models\Job;
use App\Models\location;
use App\Models\PaymentHistoryEmployer;
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
        // total monny in year
        $totalMonny = PaymentHistoryEmployer::where('user_id', Auth::guard('user')->user()->id)->pluck('price')->sum();
        return view('employer.dashboard.index', [
            'job' => $job,
            'cv' => $cv,
            'title' => 'Bảng tin | News',
            'tatalecv' => $tatalecv,
            'totalMonny' => $totalMonny,
            'totalPayment' => $totalPayment->surplus ?? 0,
            'countCvMoth1' => $this->getDataMouth(1, $checkCompany->id),
            'countCvMoth2' => $this->getDataMouth(2, $checkCompany->id),
            'countCvMoth3' => $this->getDataMouth(3, $checkCompany->id),
            'countCvMoth4' => $this->getDataMouth(4, $checkCompany->id),
            'countCvMoth5' => $this->getDataMouth(5, $checkCompany->id),
            'countCvMoth6' =>  $this->getDataMouth(6, $checkCompany->id),
            'countCvMoth7' => $this->getDataMouth(7, $checkCompany->id),
            'countCvMoth8' => $this->getDataMouth(8, $checkCompany->id),
            'countCvMoth9' => $this->getDataMouth(9, $checkCompany->id),
            'countCvMoth10' => $this->getDataMouth(10, $checkCompany->id),
            'countCvMoth11' => $this->getDataMouth(11, $checkCompany->id),
            'countCvMoth12' => $this->getDataMouth(12, $checkCompany->id),
            'totalMonnyMouth1' => $this->getDataYear(1),
            'totalMonnyMouth2' => $this->getDataYear(2),
            'totalMonnyMouth3' => $this->getDataYear(3),
            'totalMonnyMouth4' => $this->getDataYear(4),
            'totalMonnyMouth5' => $this->getDataYear(5),
            'totalMonnyMouth6' => $this->getDataYear(6),
            'totalMonnyMouth7' => $this->getDataYear(7),
            'totalMonnyMouth8' => $this->getDataYear(8),
            'totalMonnyMouth9' => $this->getDataYear(9),
            'totalMonnyMouth10' => $this->getDataYear(10),
            'totalMonnyMouth11' => $this->getDataYear(11),
            'totalMonnyMouth12' => $this->getDataYear(12),
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