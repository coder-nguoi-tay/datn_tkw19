<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingNotificationRequest;
use App\Models\User;
use App\Models\UserNotificationSetting;

use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $user;



    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        //
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

    public function notificationSetting()
    {

        if (UserNotificationSetting::where('user_id', Auth::guard('user')->user()->id)->first() == null) {
            $user = Auth::guard('user')->user();
            return view(
                'user.profile.notification-setting',
                compact('user'),
                [
                    'title' => '通知受信設定'

                ]
            );
        } else {
            $user = User::select('*', 'user_notification_settings.notcie_email as email_notification')
                ->join('user_notification_settings', 'user_notification_settings.user_id', '=', 'users.id')
                ->where('user_notification_settings.user_id', Auth::guard('user')->user()->id)
                ->first();
            return view(
                'user.profile.notification-setting',
                compact('user'),
                [
                    'title' => '通知受信設定'

                ]
            );
        }
    }
    public function updateNotification(SettingNotificationRequest $request, $id)
    {

        if (!$this->user->updateNotification($request, $id)) {
            $this->setFlash(__('保存できませんでした...'), 'error');
        }
        $this->setFlash(__('保存されました！！'));

        return redirect()->back();
    }
}
