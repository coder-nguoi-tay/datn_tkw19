<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeEmployerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Location $location;
    public Employer $employer;
    public User $user;
    public function __construct(location $location, Employer $employer, User $user)
    {
        $this->location = $location;
        $this->employer = $employer;
        $this->user = $user;
    }
    public function index()
    {
        return view('employer.dashboard.index');
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
        if (!$this->checkMailUser($request)) {
            $this->setFlash(__('Email này đã được đăng ký trước đây'), 'error');
            return view('employer.pages.register', [
                'location' => $this->getlocation(),
                'request' => $request->all(),
            ]);
        }
        try {
            $user =  $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
                'status' => 2
            ]);
            $user->save();
            $employer = new $this->employer();
            $employer->name = $request->name;
            $employer->phone = $request->sdt;
            $employer->sex = $request->sex;
            $employer->namecompany = $request->company;
            $employer->workplace = $request->workplace;
            $employer->address = $request->address;
            $employer->user_id = $user->id;
            $employer->save();
            $this->setFlash(__('đăng ký tài khoản nhà tuyển dụng thành công'));
            return redirect(route('home.index'));
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('đã có một lỗi không xác định đã xảy ra, kiểm tra lại thông tin của bạn'), 'error');
            return view('employer.pages.register', [
                'location' => $this->getlocation(),
                'request' => $request->all(),
            ]);
        }
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
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('home.index');
    }
    public function register()
    {
        return view('employer.pages.register', [
            'location' => $this->getlocation()
        ]);
    }
}