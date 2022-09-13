<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Repositories\User\UserInterface;
use App\Http\Requests\ForgotPassword as ForgotPasswordRequest;
use App\Http\Requests\UserForgotPasswordRequest;
use App\Enums\StatusCode;

class UserForgotPasswordController extends BaseController
{
    private $user;
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.forgotPassword.create', [
            'title' => 'パスワード再発行申請',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserForgotPasswordRequest $request)
    {
        if (is_numeric($request->info)) {
            if (!$this->user->generalResetPass($request->info, 'phone_number')) {
                // $this->setFlash(__('Wrong phone number'), 'error');
                return response(['message' =>  'Wrong phone number'], StatusCode::BAD_REQUEST);
            }
        } else {
            if (!$this->user->generalResetPass($request->info, 'email')) {
                // $this->setFlash(__('メールが一致しません'), 'error');
                return response(['message' =>  'メールが一致しません'], StatusCode::BAD_REQUEST);
            }
        }
        return response(['url_redirect' =>  route('forgot_password_complete.index')], StatusCode::OK);
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
}
