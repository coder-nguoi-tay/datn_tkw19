<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Repositories\User\UserInterface;
use App\Http\Requests\InitPassChange;

class PasswordResetController extends BaseController
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
    public function show($token)
    {
        if (!$this->user->getUserByToken($token)) {
            abort(404);
        }

        return view('user.passwordReset.show', [
            'title' => 'パスワード再設定',
            'token' => $token,
        ]);
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
    public function update(InitPassChange $request, $id)
    {
        if ($this->user->updatePasswordByToken($request, $id)) {
            $this->setFlash(__('変更されました！！'));

            return redirect()->route('login.index');
        }
        abort(404);
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
