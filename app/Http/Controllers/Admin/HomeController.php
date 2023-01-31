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
    public function index()
    {
        $total_money = PaymentHistoryEmployer::where('status', 1)
            ->sum('price');
        $total_seeker = User::select('id')->where('status', 2)
            ->where('role_id', '=', 1)
            ->count('id');
        $total_employer = User::select('id')->where('status', 2)
            ->where('role_id', '=', 2)
            ->count('id');
        $total_job = Job::where('status', 1)->count('id');

        $payment_history = PaymentHistoryEmployer::where('status', 1)->get();
        $user_seeker = User::select('*')->where('status', 2)->where('role_id', '=', 1)->get();
        $user_employer = User::select('*')->where('status', 2)->where('role_id', '=', 2)->get();

        return view('admin.dashboard', [
            'title' => 'Admin',
            'total_money' => $total_money,
            'total_seeker' => $total_seeker,
            'total_employer' => $total_employer,
            'total_job' => $total_job,
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
