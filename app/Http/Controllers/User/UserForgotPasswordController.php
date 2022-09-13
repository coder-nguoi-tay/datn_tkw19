<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Repositories\User\UserInterface;
use App\Http\Requests\ForgotPassword as ForgotPasswordRequest;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'info' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            $this->setFlash(__('Invalid input'), 'error');
            return redirect(route('forgot_password.create'));
        }

        if (is_numeric($request->info)) {
            if (!$this->user->getUserByPhoneNumber($request->info)) {
                $this->setFlash(__('Wrong phone number'), 'error');
                return redirect(route('forgot_password.create'));
            } else {
                if (!$this->user->generalResetPass($request->info, 'phone')) {
                    $this->setFlash(__('Invalid phone number'), 'error');
                    return redirect(route('forgot_password.create'));
                }
            }
        } else {
            if (!$this->user->getByEmail($request->info)) {
                $this->setFlash(__('メールでユーザーを見つけることができません'), 'error');
                return redirect(route('forgot_password.create'));
            } else {
                if (!$this->user->generalResetPass($request->info, 'email')) {
                    $this->setFlash(__('メールが一致しません'), 'error');
                    return redirect(route('forgot_password.create'));
                }
            }
        }
        return redirect(route('forgot_password_complete.index'));
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
