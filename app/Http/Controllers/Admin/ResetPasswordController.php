<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin;
use Illuminate\Http\Request;

class ResetPasswordController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Admin $admin;
    public function __construct(Admin $admin)
    {
        $this->admin = $admin; //nó là thằng model Admin

    }
    public function index()
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
    public function store(Request $request)
    {
        if ($this->checkMail($request)) {
            return view('auth.resset_pass', [
                'title' => 'Quên mật khẩu',
                'message' => 'Email này không tồn tại mời bạn nhập email khác'
            ]);
        }
        if (!$this->generalResetPass($request)) {
            return redirect(route('index'));
        }

        return view('auth.forgotSuccess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        if (!$this->getUserByToken($token)) {
            abort(404);
        }

        return view('auth.showPass', [
            'title' => 'Đổi lại mật khẩu',
            'token' => $token,
        ]);
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
        if ($this->updatePasswordByToken($request, $id)) {
            $this->setFlash(__('Bạn đã đổi mật khẩu thành công'));
            return redirect()->route('index');
        }
        abort(404);
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
