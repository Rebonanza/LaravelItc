<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index(){
      $film = Film::join("genre", 'film.genre_id', '=', 'genre.id')
            ->select('film.nama', 'film.tahun', 'film.durasi', 'genre.genre')
            ->get();
        return response([
            'data' => $film
        ], 200);
        
            
    }
}
