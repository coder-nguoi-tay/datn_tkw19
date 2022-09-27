<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Repositories\City\CityInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\User\UserInterface;
use App\Repositories\UserTmp\UserTmpInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends BaseController
{
    private $user;

    private $prefecture;

    private $city;

    public function __construct(UserInterface $user, CityInterface $city, PrefectureInterface $prefecture)
    {
        $this->user = $user;
        $this->prefecture = $prefecture;
        $this->city = $city;
    }

    public function index()
    {
        return view('user.profile.index', [
            'title' => 'ユーザー情報設定',
            'prefectures' => $this->prefecture->get(),
            'cities' => $this->city->get(),
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(ProfileRequest $request, $id)
    {
//        dd($request->all());
        if ($this->user->updateProfile($request, $id)) {
            $this->setFlash(__('代理店の新規作成が完了しました。'));

            return redirect(route('my-event.index'));
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function settingNotification()
    {
        $user = Auth::guard('user')->user();

        return view('user.profile.setting-notification', compact('user'));
    }

    public function updateSettingNotification(Request $request, $id)
    {
        $this->userInterface->updateSettingNotification($request, $id);

        return redirect(route('my-event.index'));
    }
}
