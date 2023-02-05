<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\EmployerPaymentCv;
use App\Models\ProfileUserCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoughtCvController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public ProfileUserCv $profileCv;
    public function __construct(ProfileUserCv $profileCv)
    {
        $this->profileCv = $profileCv;
    }
    public function index(Request $request)
    {
        $breadcrumbs = [
            'Hồ sơ đã mua'
        ];
        $employer = Employer::where('user_id', Auth::guard('user')->user()->id)->first();
        // dd($employer);
        $tatalecv = EmployerPaymentCv::join('profile_user_cv', 'profile_user_cv.id', '=', 'employer_payment_cv.profile_cv_id')
            ->where('employer_payment_cv.employer_id', $employer->id)
            ->where(function ($q) {
                if (!empty($request['start_date'])) {
                    $q->whereDate('created_at', '>=', $request['start_date']);
                }
                if (!empty($request['end_date'])) {
                    $q->whereDate('created_at', '<=', $request['end_date']);
                }
            })
            ->groupBy('profile_user_cv.id')
            ->get();
        return view('employer.boughtcv.index', [
            'tatalecv' => $tatalecv,
            'title' => 'Hồ sơ đã mua',
            'breadcrumbs' => $breadcrumbs,
            'request' => $request
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