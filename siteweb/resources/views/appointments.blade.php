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
        <h1 class="position-absolute top-0 start-50 translate-middle" style="margin-top: 10vw">Réserver un rendez-vous</h1>
        <div class="position-absolute top-50 start-50 translate-middle">
            <a href="{{ route('appointments.create') }}"><button type="button" class="btn btn-primary" >Ajouter rendez-vous</button> </a>
        </div>
        
        
    </div>
</body>

</html>
