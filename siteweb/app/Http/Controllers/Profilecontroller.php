<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profile', compact('users'));
    }
}
