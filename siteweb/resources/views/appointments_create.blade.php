<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rendez-vous</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        
        <h1 style="margin-left: 25vw">Réserver un rendez-vous</h1>
        <form method="post" action="{{ route('appointments.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du donneur</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <!-- Ajouter d'autres champs de formulaire selon vos besoins -->
            <div class="mb-3">
                <label for="date" class="form-label">Date du rendez-vous</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Ville</label>
                <select class="form-control">
                    <option value=""></option>
                    @foreach(json_decode($villes) as $ville)
                    <option value="<? $ville->ville ?>">{{ $ville->ville }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Region</label>
                <select class="form-control">
                    <option value=""></option>
                    @foreach(json_decode($regions) as $region)
                    <option value="<? $region->region ?>">{{ $region->region }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-secondary">Enregistrer</button>
        </form>
</body>

</html>
