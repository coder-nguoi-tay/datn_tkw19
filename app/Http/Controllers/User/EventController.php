<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\Area\AreaInterface;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $category;

    private $prefecture;

    private $area;

    public function __construct(CategoryInterface $category, PrefectureInterface $prefecture, AreaInterface $area)
    {
        $this->category = $category;
        $this->prefecture = $prefecture;
        $this->area = $area;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.event.index', [
            'title'=>'イベント企画',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.event.create', [
            'title'=>'イベント新規作成',
            'categories' => $this->category->getOption(),
            'areas' => $this->area->get(),
            'prefectures' => $this->prefecture->get(),
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
        //
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
