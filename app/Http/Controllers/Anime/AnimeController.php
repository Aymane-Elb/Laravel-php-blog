<?php

namespace App\Http\Controllers\Anime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Show\Show;

class AnimeController extends Controller
{
    public function animeDetails($id){
        $anime = Show::find($id);

        return view("shows.anime-details", compact("anime"));
    }
}
