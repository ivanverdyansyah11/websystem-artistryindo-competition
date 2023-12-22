<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'title' => 'Blog Page',
            'page' => 'blog',
        ]);
    }

    public function detail()
    {
        return view('blog.detail', [
            'title' => 'Detail Blog Page',
            'page' => 'detail-blog',
        ]);
    }
}
