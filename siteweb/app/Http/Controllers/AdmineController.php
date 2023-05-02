<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdmineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donneurs = user::where('isAdmin', '!=', true)->get();
        return view('admine',['donneurs' => $donneurs]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'digits:10'],
            'dateNaissance' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->sexe = $request->sexe;
        $user->groupage = $request->groupage;
        $user->dateNaissance = $request->dateNaissance;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->password = Hash::make($request->nom . '_2023');

        $user->save();
        return redirect()->back()->with('success', 'Le donneur a été bien ajouté !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
