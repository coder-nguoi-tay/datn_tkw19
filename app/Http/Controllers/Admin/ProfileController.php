<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.profile.index', compact('admin'));
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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $data = Admin::find($id);
        if (isset($request->password_new) || isset($request->password_new_en)) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8',
                'password_new' => 'required|min:8',
                'password_new_en' => 'required|min:8',
            ]);
            if (Hash::check($request->password, $data->password) && $request->password_new == $request->password_new_en) {
                $data->update([
                    'email' => $request->email,
                    'password' => Hash::make($request->password_new_en),
                ]);
                $this->setFlash(__('Lưu thành công!'));
                return redirect()->route('admin.profile.show', $data->id);
            }
            if (Hash::check($request->password, $data->password) && $request->password_new != $request->password_new_en) {
                $this->setFlash(__('2 mật khẩu mới không khớp nhau'), StatusCode::ERROR);
                return redirect()->route('admin.admin.show', $data->id);
            }
            $this->setFlash(__('Mật khẩu nhập cũ không đúng'), StatusCode::ERROR);
            return redirect()->route('admin.profile.show', $data->id);
        } else {
            if (Hash::check($request->password, $data->password)) {
                $data->update([
                    'email' => $request->email,
                ]);
                $this->setFlash(__('Lưu thành công!'));
                return redirect()->route('admin.profile.show', $data->id);
            }
            $this->setFlash(__('Mật khẩu nhập cũ không đúng'), StatusCode::ERROR);
            return redirect()->route('admin.profile.show', $data->id);
        }
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
