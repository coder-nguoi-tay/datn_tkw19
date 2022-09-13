<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventReportRequest;
use App\Repositories\Admin\AdminInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class EventReportController extends BaseController
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
        return view('eventReport.index');
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
    public function store(EventReportRequest $request)
    {
        return redirect(route('eventReport.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('eventReport.show', [
            'title' => 'イベント詳細 – 参加者 – 公開チャット',
        ]);
    }
}
