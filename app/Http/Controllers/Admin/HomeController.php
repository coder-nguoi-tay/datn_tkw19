<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\StatusCode;
use App\Http\Requests\RegisterAdminRequest;
use App\Models\Job;
use App\Models\Majors;
use App\Models\News;
use App\Models\PaymentHistoryEmployer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private Admin $admin;
    public function __construct(Admin $admin)
    {
        $this->admin = $admin; //nó là thằng model Admin

    }
    public function index(Request $request)
    {
        $totalMoney = PaymentHistoryEmployer::where('status', 1)
            ->where(function ($q) use ($request) {
                if (!empty($request['date_payment'])) {
                    $q->whereYear('created_at', $request['date_payment']);
                }
            })
            ->sum('price');
        $totalSeeker = User::select('id')->where('status', 2)
            ->where('role_id', '=', 1)
            ->count('id');
        $totalEmployer = User::select('id')->where('status', 2)
            ->where('role_id', '=', 2)
            ->count('id');
        $totalJob = Job::where('status', 1)
            ->where(function ($q) use ($request) {
                if (!empty($request['date_new'])) {
                    $q->whereYear('created_at', $request['date_new']);
                }
            })
            ->count('id');
        // dd($total_job);

        return view('admin.dashboard', [
            'title' => 'Admin',
            'total_money' => $totalMoney,
            'total_seeker' => $totalSeeker,
            'total_employer' => $totalEmployer,
            'total_job' => $totalJob,
            'request' => $request,
            'countPaymentMoth1' => $this->getPaymentMouth(1, $request->date_payment),
            'countPaymentMoth2' => $this->getPaymentMouth(2, $request->date_payment),
            'countPaymentMoth3' => $this->getPaymentMouth(3, $request->date_payment),
            'countPaymentMoth4' => $this->getPaymentMouth(4, $request->date_payment),
            'countPaymentMoth5' => $this->getPaymentMouth(5, $request->date_payment),
            'countPaymentMoth6' =>  $this->getPaymentMouth(6, $request->date_payment),
            'countPaymentMoth7' => $this->getPaymentMouth(7, $request->date_payment),
            'countPaymentMoth8' => $this->getPaymentMouth(8, $request->date_payment),
            'countPaymentMoth9' => $this->getPaymentMouth(9, $request->date_payment),
            'countPaymentMoth10' => $this->getPaymentMouth(10, $request->date_payment),
            'countPaymentMoth11' => $this->getPaymentMouth(11, $request->date_payment),
            'countPaymentMoth12' => $this->getPaymentMouth(12, $request->date_payment),
            'countNewMoth1' => $this->getNewMouth(1, $request->date_new),
            'countNewMoth2' => $this->getNewMouth(2, $request->date_new),
            'countNewMoth3' => $this->getNewMouth(3, $request->date_new),
            'countNewMoth4' => $this->getNewMouth(4, $request->date_new),
            'countNewMoth5' => $this->getNewMouth(5, $request->date_new),
            'countNewMoth6' =>  $this->getNewMouth(6, $request->date_new),
            'countNewMoth7' => $this->getNewMouth(7, $request->date_new),
            'countNewMoth8' => $this->getNewMouth(8, $request->date_new),
            'countNewMoth9' => $this->getNewMouth(9, $request->date_new),
            'countNewMoth10' => $this->getNewMouth(10, $request->date_new),
            'countNewMoth11' => $this->getNewMouth(11, $request->date_new),
            'countNewMoth12' => $this->getNewMouth(12, $request->date_new),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterAdminRequest $request)
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