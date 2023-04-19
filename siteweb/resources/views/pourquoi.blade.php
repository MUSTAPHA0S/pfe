<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css2.css')}}">
    <link rel="stylesheet" href="{{ asset('css.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
    @extends('layouts.app')
    @include('layouts.navbar')

    <div class="card text-bg-dark">
        <img src="image2.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title fw-bold title" style="font-size: 4vw">POURQUOI DONNER ?</h5>
            <p class="card-text w-50  text-start text-wrap pt-2 mt-5 texto" style="font-size: 2vw">Le don du sang sauve la vie d’un million de malade chaque année au Maroc. En donnant votre sang, vous contribuez à sauver des vies et à aider des patients qui en ont le plus besoin. Votre don de sang peut faire la différence entre la vie et la mort pour quelqu’un.</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-12 col-12  col-lg-6 ">
            <img src="image3.jpg" class="img-fluid" alt="...">
        </div>
        <div class="fw-bolder col col-sm-12 col-12 col-lg-6" style="font-size: 1.8vw">
            <ul class="list">
                <li>Pour sauver une vie humaine</li>
                <li>Parce que la solidarité humaine est un acte religieux primordial</li>
                <li>Parce que cela ne présente aucun danger pour l’organisme</li>
                <li>Parce que chaque jour chaque être humain fabrique 250 millions de globules rouges</li>
                <li>Parce qu’on ne peut pas le fabriquer et que les malades en ont besoin </li>
                <li>Parce que après cinq dons un diplôme de donneur est obtenu</li>
            </ul>
        </div>
    </div>
    <h1 class="question">
        Vos questions, nos réponses
    </h1>
    @include('layouts.question')
</body>

</html>
