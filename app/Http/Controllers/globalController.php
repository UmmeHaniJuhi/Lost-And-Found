<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class globalController extends Controller
{
    //
    public function load_homePage()
    {
        return view('home');
    }

    public function load_searchResults()
    {
        return view('searchResults');
    }

    public function load_viewPosts()
    {
        return view('viewPosts');
    }





    // public function load_homePage()
    // {
    //     $counter['counter'] = DB::table('posts')->where('status', 'Active')->count();
    //     return view('home', $counter);
    // }

    




}
