<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    /* welcome function */
    public function welcome()
    {
        return view("welcome");
    }

    /* movies function */
    public function movies()
    {
        return view("movies");
    }

    /* shorts function */
    public function shorts()
    {
        return view("shorts");
    }

    /* tv shows function */
    public function tvshows()
    {
        return view("tvshows");
    }

    /* videogames function */
    public function videogames()
    {
        return view("videogames");
    }

    /* park attractions function */
    public function parkattractions()
    {
        return view("parkattractions");
    }

    public function cats()
    {
        return view("cats");
    }
}
