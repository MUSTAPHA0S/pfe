<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Réserver un rendez-vous</h1>
        <form method="post" action="{{ route('appointments.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom du client</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <!-- Ajouter d'autres champs de formulaire selon vos besoins -->
            <div class="mb-3">
                <label for="date" class="form-label">Date du rendez-vous</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <button type="submit

</body>
</html>