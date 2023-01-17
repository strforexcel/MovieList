<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showMovies()
    {
        $movies = movie::all();
        return view('welcome', compact(['movies']));
    }
}
