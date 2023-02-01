<?php

namespace App\Http\Controllers\Client;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\CheckLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Mail\MailActiveUser;
use App\Models\location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        // if (Auth::guard('user')->check()) {
        //     return redirect()->route('employer.index');
        // }
        // return view('client.login.index');

        return view('client.login.index', [
            'title' => 'Đăng nhập tài khoản',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.register.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials, true)) {
            if (Auth::guard('user')->user()->status == 2) {
                if (Auth::guard('user')->user()->role_id == 2) {
                    return redirect()->route('employer.index');
                }
                return redirect()->route('index');
            } else {
                $this->setFlash(__('Tải khoản chưa được kích hoạt'), 'error');
                return redirect()->back();
            }
        }
        $this->setFlash(__('Tải khoản hoặc mật khẩu không đúng'), 'error');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    public function registerClient()
    {
        return view('client.register.register', [
            'title' => 'Đăng ký tài khoản',
        ]);
    }

    public function updateRegister(UserRegisterRequest $request)
    {
        if ($this->checkMailUser($request)) {
            if ($this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 1,
                'status' => 1
            ])->save()) {
                Mail::to($request->email)->send(new MailActiveUser($request->email));
                $this->setFlash(__('Đã có một mail xác thực được gửi đến bạn!'));
                return redirect()->route('login.index');
            }
        }
        $this->setFlash(__('Email đã được đăng ký trên hệ thống trước đây!'), 'error');
        return redirect()->route('register');
    }
    public function FogotPass()
    {
        return view('client.forgotpassword.index');
    }
    public function FogotPassSuccsess(Request $request)
    {
        if (!$this->checkMailUser($request)) {
            if ($this->generalResetPassUser($request)) {
                $this->setFlash(__('Mời bạn kiểm tra mail để xác nhận đổi mật khẩu mới'));
                return redirect()->back();
            }
        }
        $this->setFlash(__('Email của bạn không tồn tại trên hệ thống'), 'error');
        return redirect()->back();
    }
    public function changePassword($token)
    {
        return view('client.forgotpassword.changePass', compact('token'));
    }
    public function changePasswordSuccsess(Request $request, $token)
    {
        try {
            if ($this->updatePasswordToken($request, $token)) {
                $this->setFlash(__('Đổi mật khẩu thành công'));
                return redirect()->route('login.index');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('Có một lỗi không mong muốn sảy ra'), 'error');
            return redirect()->route('login.index');
        }
    }
    public function activePass(Request $request)
    {
        try {
            $user = $this->user->where('email', $request->email)->first();
            $user->status = 2;
            $user->save();
            $this->setFlash(__('Kích hoạt tài khoản thành công'));
            return redirect()->route('login.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('Đã có một lỗi không xác định xảy ra'), 'error');
            return redirect()->route('login.index');
        }
    }
}