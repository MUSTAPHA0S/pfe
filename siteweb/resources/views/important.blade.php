<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css1.css')}}">
    <link rel="stylesheet" href="{{ asset('css.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
    @extends('layouts.app')
    @include('layouts.navbar')

    <div class="card text-bg-dark">
        <img src="image8.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title  fw-bold title" style="font-size: 4vw"> IMPORTANT !</h5>
            <p class="card-text w-50 text-start text-wrap pt-2 mt-5 texto" style="font-size: 2vw">Pour plus d’informations sur le don :
            </p>
        </div>
    </div>

    <div class="accordion" id="accordionExample2">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <span class="fab fa-leanpub me-2"></span>
                    Je donne du sang?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                    <strong>le sang joue un rôle crucial dans le corps humain en transportant l'oxygène, les nutriments et les hormones vers les cellules et les tissus, en éliminant les déchets et le dioxyde de carbone, en régulant la température corporelle et l'équilibre acido-basique, et en assurant la coagulation sanguine pour prévenir les saignements excessifs.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <span class="fas fa-question-circle me-2"></span>
                    Je donne du plasma?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                    <strong>Le plasma sanguin, la partie liquide du sang, est composé d'eau, de protéines, de nutriments, d'hormones, de gaz et d'autres substances importantes. Il aide à transporter les nutriments et les hormones vers les cellules et les tissus du corps.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <span class="fas fa-microphone-alt me-2"></span>
                    Je donne du Plaquettes?
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                    <strong>les plaquettes sont essentielles pour la coagulation sanguine et la guérison des blessures. Ils aident à former un caillot de plaquettes pour bloquer le saignement et à activer les facteurs de coagulation pour renforcer le caillot et permettre une guérison complète. Les plaquettes sont également impliquées dans la réponse immunitaire du corps et peuvent aider à combattre les infections.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-sm-12 col-12 col-lg-6 ">
            <div class="row">
                <div class="col col-sm-12 col-12  ">

                    <div class="card text-bg-dark">
                        <img src="comment.jpg" class="card-img" style="height:50vw" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title  fw-bold title" style="font-size: 4vw"> Comment se préparer un don ?</h5>
                            <p class="card-text w-50 text-start text-wrap pt-2 mt-5 texto" style="font-size: 1.7vw">le prélèvement dure de 10 à 90 minutes dépendamment du type de don ( sang :10min , plasma :45min , plaquettes :75min).</p>
                        </div>
                    </div>
                </div>
                <div class=" col col-12 pt-2 mt-2 ">
                    <div class="card text-bg-dark mx-auto">
                        <img src="apres.jpg" class="card-img" style="height:50vw" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title  fw-bold title" style="font-size: 4vw"> Après le don :
                            </h5>
                            <p class="card-text w-50 text-start text-wrap pt-2 mt-5 texto">
                            <ul style="font-size: 1.7vw">
                                <li>Vous devez vous reposer et boire 500ml d’eau ou de jus ;</li>
                                <li>Eviter toute activité physique intense pendant 6 à 8 heures ; </li>
                                <li>En cas de faiblesse :assoyez-vous et placez la tête entre les genoux ou allongez-vous avec les jambes surélevées pendant quelques minutes ; </li>
                                <li>Selon la nature du travail ou du sport auquel vous vous adonnez , vous pouvez avoir besoin d’un délai additionnel avant de retourner à vos activités. </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fw-bolder col col-sm-12 col-12 col-lg-6 pt-auto my-auto" style="font-size: 2vw">
            <div class="card text-bg-dark">
                <img src="pendant.jpg" class="card-img" style="height:50vw" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title  fw-bold title" style="font-size: 4vw"> Pendant le don :</h5>
                    <p class="card-text w-50 text-start text-wrap pt-2 mt-5 texto" style="font-size: 1.7vw">Dans les heures précédant votre arrivée en collecte, essayer de boire un minimum de 500ml d’eau ou de jus, et assurez-vous de bien manger en évitant les aliments gras .
                        Prévoyez des vêtements amples et des manches qui peuvent être relevées au-dessus du coude.
                        (N’oubliez pas d’apporter votre carte de donneur ou une pièce d’identité avec photo).
                    </p>
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
