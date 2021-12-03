<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class VitrineController extends Controller
{

    public function index(){
        $genres = Genre::all();
        return view('vitrine.index', compact('genres'));
    }

    public function showmovie(Movie $movie){
        return dd($movie);
    }
}
