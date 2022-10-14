<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserSettingRequest;
use App\Repositories\City\CityInterface;
use App\Repositories\IndustryBroad\IndustryBroadInterface;
use App\Repositories\JobBroad\JobBroadInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSettingController extends BaseController
{
    private $user;

    private $prefecture;

    private $city;

    private $jobBroad;

    private $industryBroad;

    public function __construct(UserInterface $user, CityInterface $city, PrefectureInterface $prefecture, JobBroadInterface $jobBroad,
        IndustryBroadInterface $industryBroad)
    {
        $this->user = $user;
        $this->prefecture = $prefecture;
        $this->city = $city;
        $this->jobBroad = $jobBroad;
        $this->industryBroad = $industryBroad;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.userSetting.index', [
            'title' => 'ユーザー情報設定',
            'prefectures' => $this->prefecture->get(),
            'cities' => $this->city->get(),
            'jobs' => $this->jobBroad->get(),
            'industries' => $this->industryBroad->get(),
            'user' => Auth::guard('user')->user(),
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
    public function update(UserSettingRequest $request, $id)
    {
        if (! $this->user->userSetting($request, $id)) {
            $this->setFlash(__('更新できませんでした...'), 'error');
        }
        $this->setFlash(__('更新されました！！'));

        return redirect(route('user-setting.index'));
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
