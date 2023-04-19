<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        $user = Auth::user();
        return view('Profile', [
            'User' => User::findOrFail($id)
        ]);
    }
}
