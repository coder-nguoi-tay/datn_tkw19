<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class PasswordResetExpiredController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('passwordResetExpired.index', [
            'title' => TITLE_RESET_PASS_EXPIRED,
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
}
