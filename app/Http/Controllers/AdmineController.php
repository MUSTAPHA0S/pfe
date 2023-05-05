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
        $donneurs = new User();
        $donneurs->nom = $request->nom;
        $donneurs->prenom = $request->prenom;
        $donneurs->sexe = $request->sexe;
        $donneurs->groupage = $request->groupage;
        $donneurs->dateNaissance = $request->dateNaissance;
        $donneurs->telephone = $request->telephone;
        $donneurs->email = $request->email;
        $donneurs->password = Hash::make($request->nom . '_2023');

        $donneurs->save();
        // return redirect('/admine')->back()->with('success', 'Le donneur a été bien ajouté !!');
        return redirect()->route('Admine.create')->with('success', 'User created successfully!');
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'digits:10'],
            'dateNaissance' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $donneurs = user::findorfail($request->id);
        $donneurs->nom = $request->nom;
        $donneurs->prenom = $request->prenom;
        $donneurs->sexe = $request->sexe;
        $donneurs->groupage = $request->groupage;
        $donneurs->dateNaissance = $request->dateNaissance;
        $donneurs->telephone = $request->telephone;
        $donneurs->email = $request->email;

        $donneurs->save();
        return redirect('/admine')->back()->with('success', 'Le donneur a été bien modifier !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donneurs = user::findorfail($id);
        $donneurs->delete();
        return redirect('/admine')->with('success', 'Le donneur a été bien supprimer avec succes !!');
    }
}
