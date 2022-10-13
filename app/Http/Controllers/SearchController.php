<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Repositories\Admin\AdminInterface;
use App\Repositories\Event\EventInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SearchController extends BaseController
{
    private $user;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('search.index', [
            'title'=>'イベント企画',
            'events' => $this->event->get(),
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
    public function store(SearchRequest $request)
    {
        return redirect(route('search.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('search.show', [
            'title' => 'イベント詳細 – 参加者 – 公開チャット',
        ]);
    }

    public function earn()
    {
        return view('search.earn', [
            'title' => '入金（稼ぎ）一覧',
        ]);
    }
}
