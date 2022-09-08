<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\InitPassChange;
use App\Repositories\Admin\AdminInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class PasswordResetController extends BaseController
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        if (! $this->user->getUserByToken($token)) {
            abort(404);
        }

        return view('admin.passwordReset.show', [
            'title' => 'パスワード再設定',
            'token' => $token,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InitPassChange $request, $id)
    {
        if ($this->user->updatePasswordByToken($request, $id)) {
            $this->setFlash(__('パスワード変更が完了しました'));

            return redirect()->route('admin.login.index');
        }
        abort(404);
    }
}
