<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function index()
    {
        $profile = users::all();
        return view('profile',compact('profile'));
    }
}
