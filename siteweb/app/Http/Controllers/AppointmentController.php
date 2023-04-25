<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AppointmentController extends Controller
{
    public function index()
    {
        // Afficher la liste des rendez-vous
        $appointments = Appointment::all();
        return view('appointments', [
            'appointments' => $appointments,
            'villes' => file_get_contents(public_path('json/Villes.json')),
            'regions' => file_get_contents(public_path('json/Regions.json')),
        ]);
    }

    public function create()
    {
        // Afficher le formulaire de réservation
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire de réservation
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            // Ajouter d'autres règles de validation selon vos besoins
        ]);

        // Créer un nouveau rendez-vous
        $appointment = new Appointment([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            // Ajouter d'autres champs à remplir selon votre modèle de données
        ]);

        // Sauvegarder le rendez-vous
        $appointment->save();

        // Rediriger vers la liste des rendez-vous avec un message de succès
        return redirect()->route('appointments.index')->with('success', 'Rendez-vous réservé avec succès !');
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
