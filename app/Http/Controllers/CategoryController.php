<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Category ArtistryIndo Page',
            'page' => 'category',
        ]);
    }

    public function detail()
    {
        return view('category.detail', [
            'title' => 'Detail Category ArtistryIndo Page',
            'page' => 'detail-category',
        ]);
    }
}
