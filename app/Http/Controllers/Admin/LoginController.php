<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\CheckLoginRequest;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect(route('admin.admin.index'));
        }
        return view('auth.login', [
            'title' => 'Đăng nhập'
        ]);
    }
    public function resset_pass()
    {
        return view('auth.resset_pass');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
        $data = Admin::where('email', $request->email)->first();
        if ($request->save == 'on') {
            if (Auth::guard('admin')->attempt($credentials, $request->save)) {
                $data->update(['status' => 1]);
                return redirect($request->url_redirect ? $request->url_redirect : route('admin.admin.index'));
            }
            return view('auth.login', [
                'message' => 'Tài khoản và mật khẩu không đúng'
            ]);
        }
        if (Auth::guard('admin')->attempt($credentials)) {
            $data->update(['status' => 1]);
            return redirect($request->url_redirect ? $request->url_redirect : route('admin.admin.index'));
        }
        return view('auth.login', [
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
    }
    public function logout()
    {
        $data = Admin::where('id', Auth::guard('admin')->id())->first();
        $data->update(['status' => 0]);
        Auth::guard('admin')->logout();
        Request()->session()->invalidate();
        Request()->session()->regenerateToken();
        return redirect(route('admin.index'));
    }
}
