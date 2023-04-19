<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="{{ asset('css.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
    @extends('layouts.app')
    @include('layouts.navbar')

    <div class="card text-bg-dark ">
      <img src="image7.jpg" class="card-img " style="height:60vw">
      <div class="card-img-overlay">
        <h5 class="card-title  fw-bold title" style="font-size: 4vw">Où donner ?</h5>
        <p class="card-text w-50 text-start text-wrap pt-2 mt-5 texto" style="font-size: 2vw">Vous pouvez faire une différence positive dans le monde en donnant du sang. Chaque petit geste compte et peut contribuer à un monde meilleur.
        </p>
      </div>
    </div>


        {{-- <div class="row">
          <div class="col col-sm-12 col-12  col-lg-6 ">
            <img src="image6.jpg" class="img-fluid" alt="...">
          </div>  
          <div class="fw-bolder col col-sm-12 col-12 col-lg-6 pt-2 mt-2" style="font-size: 2vw" >
            Le don de sang est une responsabilité collective qui repose sur nous. Si vous êtes en bonne santé et répondez  aux critères de don, je vous encourage à prendre le temps de donner votre sang. C'est un geste simple qui peut faire une grande différence dans la vie des autres, et vous pouvez être fier de vous être engagé à faire une différence.         
            <a href="/siteweb/public/localisation"><button type="button" class="btn btn-danger">Je prend un rendez-vous</button></a>
          </div>
          </div> --}}

          <div class="row">
            <div class="col col-sm-12 col-12 col-lg-6 ">
              <img src="image6.jpg" class="img-fluid" alt="...">
            </div>  
            <div class="fw-bolder col col-sm-12 col-12 col-lg-6 pt-2 mt-2" style="font-size: 2vw" >
              <div class="row">
                <div class="col col-sm-12 col-12  ">
                  Le don de sang est une responsabilité collective qui repose sur nous. Si vous êtes en bonne santé et répondez  aux critères de don, je vous encourage à prendre le temps de donner votre sang. C'est un geste simple qui peut faire une grande différence dans la vie des autres, et vous pouvez être fier de vous être engagé à faire une différence.         

                </div>  
                <div class=" col col-12 pt-2 mt-2 " >
                  <div class="d-grid gap-2">

                    <a href="/siteweb/public/localisation"><button type="button" class="btn btn-danger btn-lg btn-block">Je prend un rendez-vous</button></a>

                  </div>
                  </div>
                </div>
            </div>
            </div>
        
            <h1 class="question">
              Vos questions, nos réponses     
          </h1>
        @include('layouts.question')
</body>
</html>