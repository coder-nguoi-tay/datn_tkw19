<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends BaseController
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
        $admin = Admin::select('id', 'name', 'email', 'role', 'created_at','status')->get();
        return view('admin.admin.index', [
            'admin' => $admin,
            'title' => 'Danh sách Tài Khoản Quản Trị'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create', [
            'title' => 'Thêm Tài Khoản Quản Trị'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        if ($this->checkMail($request)) {
            if ($this->admin->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 1,
                'status' => 2
            ])->save()) {
                $this->setFlash(__('Đăng ký tài khoản thành công'));
                return redirect(route('admin.admin.index'));
            }
        }
        $this->setFlash(__('Đã có một lỗi xảy ra <br> Hoặc email đã tồn tại <br> Vui lòng nhập thử bằng email khác'), StatusCode::ERROR);
        return redirect(route('admin.admin.create'));
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
        // return view('admin.admin.edit', [
        //     'admin' => $this->admin->where('id', $id)->first(),
        //     'title' => 'Sửa Thông Tin Quản Trị'
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
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
        if ($this->admin->destroy($id)) {
            return response()->json([
                'message' => 'Xóa Quản Trị Viên Thành Công',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        }
        return response()->json([
            'message' => 'Đã Có Một Lỗi Sảy Ra',
            'status' => StatusCode::OK,
        ], StatusCode::INTERNAL_ERR);
    }
}
