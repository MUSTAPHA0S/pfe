<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\City;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AppointmentController extends Controller
{
    public function index()
    {
        // Afficher la liste des rendez-vous
        $appointments = Appointment::all();
        return view('appointments', ['appointments' => $appointments]);
    }

    public function create()
    {
        // Afficher le formulaire de réservation
        $cities = City::all();
        $regions = Region::all();
        return view('appointments_create', compact("cities","regions"));
    }

    public function store(Request $request)
    {
        // Créer un nouveau rendez-vous

        $ville = City::whereid($request->villes)->with("region")->first();

        appointment::create([
            'nom' => $request->nom,
            'date' => $request->date,
            "region" => $ville->region->designation,
            "ville" => $ville->designation,
            // Ajouter d'autres champs à remplir selon votre modèle de données
        ]);

        // Sauvegarder le rendez-vous


        // Rediriger vers la liste des rendez-vous avec un message de succès
        return redirect("/")->with("success",[
            "key"=>"success",
            "msg"=>"Merci ".$request->nom.", votre Rendez-vous réservé avec succès sous la date: ".$request->date. ". à: ".$ville->designation,
        ]);
    }

    public function update(Request $request, string $id)
    {
        // Valider les données du formulaire de réservation
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            // Ajouter d'autres règles de validation selon vos besoins
        ]);

        // Créer un nouveau rendez-vous

        Appointment::where('id', $id)->update([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            // Ajouter d'autres champs à remplir selon votre modèle de données
        ]);

        // Rediriger vers la liste des rendez-vous avec un message de succès
        return redirect()->route('appointments.index')->with('success', 'Rendez-vous modier avec succès !');
    }

    public function delete(string $id)
    {
        Appointment::where('id', $id)->delete();

        // Rediriger vers la liste des rendez-vous avec un message de succès
        return redirect()->route('appointments.index')->with('success', 'Rendez-vous supprimer avec succès !');
    }
}
