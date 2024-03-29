<?php

namespace App\Http\Controllers\Employer;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\AccountPayment;
use App\Models\Accuracy;
use App\Models\Company;
use App\Models\Employer;
use App\Models\EmployerPaymentCv;
use App\Models\Feedback;
use App\Models\FeedbackCv;
use App\Models\Job;
use App\Models\Jobseeker;
use App\Models\location;
use App\Models\Majors;
use App\Models\PaymentHistoryEmployer;
use App\Models\Profession;
use App\Models\ProfileUserCv;
use App\Models\SaveCv;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\UploadCv;
use App\Models\WorkingForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerUploadCvController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public SaveCv $savecv;
    public Job $job;
    public Employer $employer;
    public Jobseeker $jobseeker;
    public Skill $skill;
    public Timework $timework;
    public Profession $profession;
    public Majors $majors;
    public location $location;
    public WorkingForm $workingform;
    public UploadCv $upload;
    public function __construct(WorkingForm $workingform, location $location, Majors $majors, Profession $profession, SaveCv $savecv, Job $job, Employer $employer, Jobseeker $jobseeker, Skill $skill, Timework $timework, UploadCv $upload)
    {
        $this->savecv = $savecv;
        $this->job = $job;
        $this->employer = $employer;
        $this->jobseeker = $jobseeker;
        $this->skill = $skill;
        $this->timework = $timework;
        $this->profession = $profession;
        $this->majors = $majors;
        $this->location = $location;
        $this->workingform = $workingform;
        $this->upload = $upload;
    }
    public function index(Request $request)
    {
        $checkCompany = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        $cv = $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->leftjoin('users', 'users.id', '=', 'save_cv.user_id')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->leftjoin('majors', 'majors.id', '=', 'job.majors_id')
            ->where([
                ['job.employer_id', $checkCompany->id],
                ['save_cv.status', 0],
            ])
            ->where(function ($q) use ($request) {
                if (!empty($request['start_date'])) {
                    $q->whereDate('save_cv.created_at', '>=', $request['start_date']);
                }
                if (!empty($request['end_date'])) {
                    $q->whereDate('save_cv.created_at', '<=', $request['end_date']);
                }
                if (!empty($request['free_word'])) {
                    $q->orWhere($this->escapeLikeSentence('users.name', $request['free_word']));
                    $q->orWhere($this->escapeLikeSentence('majors.name', $request['free_word']));
                    $q->orWhere($this->escapeLikeSentence('save_cv.token', $request['free_word']));
                }
            })
            ->select('users.name as user_name', 'users.images as images', 'save_cv.status as status', 'save_cv.id as cv_id', 'save_cv.file_cv as file_cv', 'save_cv.user_id as user_id', 'majors.name as majors_name', 'save_cv.created_at as create_at_sv', 'save_cv.token as token')
            ->get();
        $breadcrumbs = [
            'Hồ sơ đã nhận',
        ];
        return view('employer.managercv.index', [
            'cv' => $cv,
            'request' => $request,
            'skill' => $this->getskill(),
            'timework' => $this->gettimework(),
            'profession' => $this->getprofession(),
            'majors' => $this->getmajors(),
            'location' => $this->getlocation(),
            'workingform' => $this->getworkingform(),
            'breadcrumbs' => $breadcrumbs,

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
        $employer = Employer::where('user_id', Auth::guard('user')->user()->id)->first();
        $profile = ProfileUserCv::where('profile_user_cv.id', $id)->with(['employerPayment' => function ($q) use ($employer) {
            $q->where('employer_id', $employer->id);
        }, 'user'])
            ->with(['feedback' => function ($q) {
                $q->where('feedback_id', 1);
            }])
            ->with(['feedback2' => function ($q) {
                $q->where('feedback_id', 2);
            }])
            ->with(['feedback3' => function ($q) {
                $q->where('feedback_id', 3);
            }])
            ->first();
        // dd($profile);
        $accPayment = AccountPayment::where('user_id', Auth::guard('user')->user()->id)->first();
        $checkFeedback = FeedbackCv::where('employer_id', $employer)->first();
        return view('employer.managercv.showcv', [
            'cv' => $profile,
            'employer' => $employer,
            'accPayment' => $accPayment,
            'checkFeedback' => $checkFeedback,
            'feedback' => Feedback::all(),
            'feedback_cv' => FeedbackCv::where('profile_cv_id', $id)->get(),
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
    public function changeStatus($id, Request $request)
    {
        $employer = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        try {
            //tk
            $account = AccountPayment::where('user_id', Auth::guard('user')->user()->id)->first();
            if (!$account) {
                return response()->json([
                    'message' => 'Bạn hay đăng ký tài khoản trước khi sử dụng dịch vụ của chúng tôi!',
                    'status' => StatusCode::FORBIDDEN,
                ], StatusCode::OK);
            }
            if ($account->surplus < $request->total) {
                return response()->json([
                    'message' => 'Số dư của bạn không đủ để sử dụng dịch vụ của chúng tôi!',
                    'status' => StatusCode::FORBIDDEN,
                ], StatusCode::OK);
            }
            $account->surplus -= $request->total;
            $account->save();
            //muacv
            $upcv = ProfileUserCv::where('id', $id)->first();

            $profileCv = new EmployerPaymentCv();
            $profileCv->profile_cv_id = $id;
            $profileCv->employer_id = $employer->id;
            $profileCv->save();
            //lsgd
            $paymentHistory = new PaymentHistoryEmployer();
            $paymentHistory->user_id = Auth::guard('user')->user()->id;
            $paymentHistory->price = $request->total;
            $paymentHistory->desceibe = 'Thanh toán mua CV ' . $upcv->name;
            $paymentHistory->form = '';
            $paymentHistory->status = 1;
            $paymentHistory->save();
            return response()->json([
                'message' => 'Mua cv thành công',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => 'Đã có một lỗi không xác định sảy ra',
                'status' => StatusCode::FORBIDDEN,
            ], StatusCode::OK);
        }
    }
    public function ImageAccuracy(Request $request)
    {
        $employer = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
        if (!$employer->id_company) {
            $this->setFlash(__('Bạn chưa cập nhật thông tin công ty!'), 'error');
            return redirect()->back();
        }
        try {
            $company = Company::where('id', $employer->id_company)->first();
            if ($company->accuracy) {
                $accy = $company->accuracy;
            } else {
                $accy = new Accuracy();
            }
            $accy->user_id = $company->id;
            $accy->status = 0;
            if ($request->hasFile('images')) {
                $accy->images = $request->images->storeAs('images/cv', $request->images->hashName());
            }
            $accy->save();
            $this->setFlash(__('Chúng tôi sẽ xác nhận cho bạn sớm nhất có thể'));
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('Đã có một lỗi không xác định xảy ra'), 'error');
            return redirect()->back();
        }
    }
    public function changeStatusCv($id)
    {
        try {
            $cv =  $this->savecv->where('token', $id)->first();
            $cv->status = 1;
            $cv->save();
            return response()->json([
                'message' => 'Loại bỏ hồ sơ thành công',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => 'Đã có một lỗi không xác định sảy ra',
                'status' => StatusCode::FORBIDDEN,
            ], StatusCode::OK);
        }
    }
}
