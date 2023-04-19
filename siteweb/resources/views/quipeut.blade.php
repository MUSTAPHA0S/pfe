<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
    @extends('layouts.app')
    @include('layouts.navbar')

    <div class="card text-bg-dark">
        <img src="image4.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title  fw-bold title" style="font-size: 4vw"> QUI PEUT DONNER ?</h5>
            <p class="card-text w-50 text-start text-wrap pt-2 mt-5 texto" style="font-size: 2vw">Votre don de sang peut sauver des vies et faire une réelle différence dans le monde, ‘’ pourquoi ne pas essayer ?! ‘’
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col col-sm-12 col-12  col-lg-6 ">
            <img src="image5.jpg" class="img-fluid" alt="...">
        </div>
        <div class="fw-bolder col col-sm-12 col-12 col-lg-6 my-auto" style="font-size: 2.2vw">
            Toute personne homme ou femme en bonne santé, ayant plus de 18 ans et moins de 60 ans peut donner son sang à condition d’être reconnue apte par le médecin responsable du prélèvement. L’homme peut donner 5 fois par an et la femme 3 fois par an.
        </div>
    </div>
    <h1 class="question">
        Vos questions, nos réponses
    </h1>
    @include('layouts.question')
</body>

</html>
