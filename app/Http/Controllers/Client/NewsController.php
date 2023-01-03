<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Majors;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('client.Tin-tuc.news', [
            'company' => Company::all()
        ]);
    }
    public function showTinTuc($id)
    {
        $company = Company::find($id);
        return view('client.Tin-tuc.detai-news', [
            'company' => $company
        ]);
    }
}
