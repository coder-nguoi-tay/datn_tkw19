<?php

namespace App\Http\Controllers\User;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ForgotPassword as ForgotPasswordRequest;
use App\Http\Requests\UserForgotPasswordRequest;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
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
            'email' => 'required|email',
        ]);
        $isEmail = true;
        if ($validator->fails()) {
            $isEmail = false;
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'regex:/^(0(\d-\d{4}-\d{4}))|(0(\d{3}-\d{2}-\d{4}))|((070|080|090|050)(-\d{4}-\d{4}))|(0(\d{2}-\d{3}-\d{4}))|(0(\d{9,10}))+$/'],
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'invalid param',
                    'status_code' => StatusCode::BAD_REQUEST,
                ], StatusCode::OK);
            }
        }
        if (! $this->user->generalResetPass($request, $isEmail)) {
            return response(['message' =>  'エラーが発生しました。'], StatusCode::BAD_REQUEST);
        }

        return response(['message' =>  'メールが一致しません'], StatusCode::OK);
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
