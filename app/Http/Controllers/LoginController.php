<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repositories\Admin\AdminInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class LoginController extends BaseController
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
    public function index(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            return redirect(route('admin.dashboard.index'));
        }

        return view('login.index', [
            'title' => '管理サイトログイン',
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
    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password', 'type');
        if (Auth::guard('admin')->attempt($credentials, $request->remember_me ?? false)) {
            if (! $this->user->updateLastLogin(Auth::guard('admin')->user()->id)) {
                Auth::guard('admin')->logout();

                return redirect('/');
            }

            return redirect($request->url_redirect ? $request->url_redirect : route('admin.dashboard.index'));
        }

        return redirect(route('login.index', ['message' => 'メールアドレスとパスワードが一致しません。']));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect(route('login.index'));
    }
}
