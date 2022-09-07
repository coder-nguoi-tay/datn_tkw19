<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\UserRegister;
use App\Repositories\City\CityInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    private $userInterface;

    private $prefecture;

    private $city;
    public function __construct(UserInterface $userInterface, CityInterface $city, PrefectureInterface $prefecture)
    {
        $this->userInterface = $userInterface;
        $this->prefecture = $prefecture;
        $this->city = $city;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            'ユーザー一覧',
        ];
        $newSizeLimit = $this->newListLimit($request);
        session()->forget('admin.user.list');
        session()->push('admin.user.list', url()->full());

        return view('admin.user.index', [
            'title' => 'ユーザー一覧',
            'breadcrumbs' => $breadcrumbs,
            'users' => $this->userInterface->get($request),
            'request' => $request,
            'newSizeLimit' => $newSizeLimit,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            [
                'url' => session()->get('admin.user.list')[0] ?? route('admin.user.index'),
                'name' => 'ユーザー一覧',
            ],
            'ユーザー作成',
        ];

        return view('admin.user.create', [
            'title' => 'ユーザー作成',
            'breadcrumbs' => $breadcrumbs,
            'prefectures' => $this->prefecture->get(),
            'cities' => $this->city->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegister $request)
    {
        if ($this->userInterface->store($request)) {
            $this->setFlash(__('代理店の新規作成が完了しました。'));

            return redirect(session()->get('admin.user.list')[0] ?? route('admin.user.index'));
        }
        $this->setFlash(__('エラーが発生しました。'), 'error');

        return redirect()->route('admin.user.create');
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
        $breadcrumbs = [
            [
                'url' => session()->get('admin.user.list')[0] ?? route('admin.user.index'),
                'name' => 'ユーザー一覧',
            ],
            'ユーザー編集',
        ];
        $user = $this->userInterface->getById($id);
        if (!$user) {
            return redirect(session()->get('admin.user.list')[0] ?? route('admin.user.index'));
        }

        return view('admin.user.edit', [
            'title' => 'ユーザー編集',
            'breadcrumbs' => $breadcrumbs,
            'user' => $user,
            'prefectures' => $this->prefecture->get(),
            'cities' => $this->city->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRegister $request, $id)
    {
        if ($this->userInterface->update($request, $id)) {
            $this->setFlash(__('代理店の新規作成が完了しました。'));

            return redirect(session()->get('admin.user.list')[0] ?? route('admin.user.index'));
        }
        $this->setFlash(__('エラーが発生しました。'), 'error');
        return redirect()->route('admin.user.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->userInterface->destroy($id)) {
            return response()->json([
                'message' => 'お知らせの削除が完了しました。',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        }

        return response()->json([
            'message' => 'エラーが発生しました。',
            'status' => StatusCode::OK,
        ], StatusCode::INTERNAL_ERR);
    }

    public function checkEmail(Request $request)
    {
        return response()->json([
            'valid' => $this->userInterface->checkEmail($request),
        ], StatusCode::OK);
    }

    public function checkPhone(Request $request)
    {
        return response()->json([
            'valid' => $this->userInterface->checkPhone($request),
        ], StatusCode::OK);
    }
}
