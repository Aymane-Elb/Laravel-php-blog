<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show\Show;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Adventure Shows (unchanged)
                $adventureShows = Show::select()->orderBy('id', 'desc')->take(6)->where('genre', 'adventure')->get();

                // All Shows (unchanged)
                $shows = Show::select()->orderBy('id', 'desc')->take(6)->get();

                // Trending Shows (improved: most recent shows by date_aired)
                $trendingShows = Show::select()->orderBy('date_aired', 'desc')->take(6)->get();

                // Action Shows (improved: recent shows with "Action" in genre)
                $actionShows = Show::select()->where('genre', 'LIKE', '%Action%')->orderBy('date_aired', 'desc')->take(6)->get();

                // Comedy Shows (improved: recent shows with "Comedy" in genre)
                $comedyShows = Show::select()->where('genre', 'LIKE', '%Comedy%')->orderBy('date_aired', 'desc')->take(6)->get();
                $foruShows = Show::select()->where('genre', 'LIKE', '%Comedy%')->orWhere('genre', 'LIKE', '%Action%')->orderBy('date_aired', 'desc')->take(3)->get();

        return view('home',compact("shows","trendingShows","adventureShows","actionShows","comedyShows","foruShows")); 
    }
}
