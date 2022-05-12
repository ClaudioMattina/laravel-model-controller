<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function getIndex(){

        $movies = Movie::all();

        $data = [
            "movie" => new Movie(),
            "movies" => $movies,
        ];

        return view('films.index', $data);
    }
}
