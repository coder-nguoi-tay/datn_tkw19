<?php

namespace App\Http\Controllers\User;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ChangePasswordRequest;
use App\Repositories\City\CityInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends BaseController
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('user.changePassword.index', [
            'title' => 'パスワード設定',
            'user' => Auth::guard('user')->user(),
        ]);
    }

    public function update(ChangePasswordRequest $request)
    {
        if (! $this->user->changePassword($request)) {
            $this->setFlash(__('更新できませんでした...'), 'error');
        }
        $this->setFlash(__('更新されました！！'));

        return redirect()->route('change-password.index');
    }
}
