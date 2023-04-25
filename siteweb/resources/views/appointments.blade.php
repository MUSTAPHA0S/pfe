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
        <a href="{{ route('appointments.create') }}">Ajouter rendez-vous</a>
        
    </div>
</body>

</html>
