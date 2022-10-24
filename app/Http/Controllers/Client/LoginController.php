<?php

namespace App\Http\Controllers\Client;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\CheckLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        if (Auth::guard('user')->check()) {
            return redirect()->route('employer.index');
        }
        return view('client.login.index');
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
        if (Auth::guard('user')->attempt($credentials, $request->save ?? '')) {
            if (Auth::guard('user')->user()->role_id == 2) {
                return redirect($request->url_redirect ? $request->url_redirect : route('employer.index'));
            }
            // return redirect($request->url_redirect ? $request->url_redirect : route('employer.new.index'));
        }
        return view('client.login.index', [
            'message' => 'Tài khoản và mật khẩu không đúng'
        ]);
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
    public function updateRegister(UserRegisterRequest $request)
    {
        if ($request->form == 1) {
            if ($this->checkMailUser($request)) {
                if ($this->user->create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => 1,
                    'status' => 2
                ])->save()) {
                    $this->setFlash(__('Đăng ký tài khoản thành công'));
                    return redirect(route('owner.index'));
                }
            }
            // $this->setFlash(__('Đã có một lỗi xảy ra <br> Hoặc email đã tồn tại <br> Vui lòng nhập thử bằng email khác'), StatusCode::ERROR);
            return view('client.register.index', [
                'message' => 'email đã được đăng ký',
                'request' => $request->all(),
            ]);
        }
    }
}