<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $titletab = "Home";
        return view('pages.home')->with([
            "title"=>$titletab
        ]);
    }

    public function article()
    {
        $title_article = "Article";
        return view('pages.article')->with([
            "title"=>$title_article
        ]);
    }
}
