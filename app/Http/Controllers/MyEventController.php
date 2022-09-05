<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyEventRequest;
use App\Repositories\Admin\AdminInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class MyEventController extends BaseController
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
        return view('myEvent.index');
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
    public function store(MyEventRequest $request)
    {
        return redirect(route('myEvent.index'));
    }
}
