<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(): View
    {
        return view('home', [
            'user' => Auth::user()
        ]);
    }
}

