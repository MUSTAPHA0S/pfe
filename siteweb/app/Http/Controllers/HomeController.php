<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


        
        if(auth()->user()->hasRole("admin")){
            $donneurs = User::where('isAdmin', '!=', true)->get();
            return view('admine',['donneurs' => $donneurs]);
            // return view('admine', ['user' => Auth::user()]);
        }

        return view('home', ['user' => Auth::user()]);
    }
}
