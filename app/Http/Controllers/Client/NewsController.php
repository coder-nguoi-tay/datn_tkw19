<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Majors;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('client.news', [
            'majors' => Majors::all()
        ]);
    }
    public function Test()
    {
        return view('client.Test');
    }
}