<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Majors;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $News = News::select('id', 'title', 'new_image', 'describe', 'created_at', 'majors')->get();
        return view('client.blog.blog', [
            'company' => Company::all(),
            'news' => $News,
            'majors' => Majors::all()
        ]);
    }
    public function ShowBlog($id)
    {
        $Blog = News::find($id);
        return view('client.blog.index', [
            'blog' => $Blog,
            'majors' => Majors::all()
        ]);
    }
}