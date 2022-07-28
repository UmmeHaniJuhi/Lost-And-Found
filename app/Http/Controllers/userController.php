<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function load_createPost()
    {
        return view('createPost');
    }


    public function load_userDashboard()
    {
        return view('userDashboard');
    }


}
