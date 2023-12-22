<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistryController extends Controller
{
    public function index()
    {
        return view('artistry.index', [
            'title' => 'Artistry Page',
            'page' => 'artistry',
        ]);
    }
}
