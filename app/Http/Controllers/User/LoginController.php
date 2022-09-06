<?php

namespace App\Http\Controllers\User;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\UserLoginRequest;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
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
    public function index(Request $request)
    {
        if (Auth::guard('user')->check()) {
            return redirect(route('my-event.index'));
        }

        return view('user.login.index', [
            'title' => 'ログイン',
            'message' => $request->message,
            'request' => $request->all(),
        ]);
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
    public function store(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials, $request->remember_me ?? false)) {
            if (! $this->user->updateLastLogin(Auth::guard('user')->user()->id)) {
                Auth::guard('user')->logout();

                return response()->json([
                    'message' => 'メールアドレスとパスワードが一致しません。',
                ], StatusCode::UNAUTHORIZED);
            }

            return response()->json([
                'url_redirect' => $request->url_redirect ? $request->url_redirect : route('my-event.index'),
            ], StatusCode::OK);
        }

        return response()->json([
            'message' => 'メールアドレスとパスワードが一致しません。',
        ], StatusCode::UNAUTHORIZED);
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

        return redirect(route('login.index'));
    }
}
