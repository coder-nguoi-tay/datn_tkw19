<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ForgotPassword as ForgotPasswordRequest;
use App\Repositories\Admin\AdminInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ForgotPasswordController extends BaseController
{
    private $user;

    public function __construct(AdminInterface $user)
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
        return view('admin.forgotPassword.create', [
            'title' => 'パスワード再発行申請',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForgotPasswordRequest $request)
    {
        if (! $this->user->getByEmail($request)) {
            $this->setFlash(__('メールでユーザーを見つけることができません'), 'error');

            return redirect(route('admin.forgot_password.create'));
        }
        if (! $this->user->generalResetPass($request)) {
            $this->setFlash(__('メールが一致しません'), 'error');
        }

        return redirect(route('admin.forgot_password_complete.index'));
    }
}
