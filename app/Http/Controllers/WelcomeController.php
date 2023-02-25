<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
}
