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

    //footer pages
    public function load_aboutUs()
    {
        return view('footer.aboutUs');
    }

    public function load_contactUs()
    {
        return view('footer.contactUs');
    }

    public function load_privacyPolicy()
    {
        return view('footer.privacyPolicy');
    }

    public function load_toc()
    {
        return view('footer.toc');
    }





    // public function load_homePage()
    // {
    //     $counter['counter'] = DB::table('posts')->where('status', 'Active')->count();
    //     return view('home', $counter);
    // }

    




}
