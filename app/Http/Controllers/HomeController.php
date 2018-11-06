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
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
        $categories = \App\Film::select('category')->distinct()->get();
                
        if ($category && $category != 'all'){
            $films = \App\Film::where('category', $category)->get();
        } else{
            $films = \App\Film::all();
        }
        return view('home', ['films' => $films, 'categories' => $categories, 'selected' => $category ] );
    }
}
