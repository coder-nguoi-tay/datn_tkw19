<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyPageRequest;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class MyPageController extends BaseController
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
        return view('myPage.index', [
            'userInfo' => $this->user->getInfoMypage(Auth::guard('user')->user()->id)
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
    public function store(MyPageRequest $request)
    {
        return redirect(route('myPage.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('myPage.show', [
            'title' => 'イベント詳細 – 参加者 – 公開チャット',
        ]);
    }

    public function earn()
    {
        return view('mypage.earn', [
            'title' => '入金（稼ぎ）一覧',
        ]);
    }
}
