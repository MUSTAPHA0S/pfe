<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rendez-vous</title>
<style>
    .appo{
        margin-top: 3vw;
        color: red;
    }
    .image{
        width: 100%;
    }
</style>

</head>

<body>
    @extends('layouts.app')
    @include('layouts.navbar')
    <h5 class="fw-bold title text-center my-4" style="font-size: 2.5vw">Votre préparation :</h5>

    <div class="row">
        <div class="col col-sm-12 col-12  col-lg-6 my-4  ">
            <img src="image11.jpg" class="img-fluid" alt="...">
        </div>
        <div class="fw-bolder col col-sm-12 col-12 col-lg-6 pt-auto my-auto" style="font-size: 1.8vw">
            <ul class="list">
                <li class="list-group-item">Vous vous sentez en forme ? Parfait, c’est donc le moment idéal. </li>
                <li class="list-group-item">Prenez un bon petit-déjeuner ou un déjeuner équilibré avant de venir. </li>
                <li class="list-group-item">Hydratez-vous : buvez de l’eau ou des jus de fruits avant, pendant et après le don.</li>
                <li class="list-group-item">Évitez les boissons alcoolisées durant les heures qui précèdent le don.</li>
            </ul>
        </div>
    </div>

    <h1 class="appo my-4">
        Parce que votre santé est notre priorité, prenez le temps de parcourir ces quelques conseils alimentaires. Ils vous permettront de bien récupérer après votre don.
    </h1>

    <h5 class="fw-bold title text-center my-4" style="font-size: 2vw; color:rgb(166, 159, 255)">Privilégier une alimentation riche en fer</h5>

    <div class="fw-bolder" style="font-size: 1.5vw">
        <p>Pour une expérience de don au top, vous devez bien vous hydrater, dans les heures qui suivent votre don et veiller à consommer une alimentation riche en fer dans les semaines suivantes</p>
    </div>
    <div class="text-center my-4">
        <img src="image12.jpg" class="img-fluid" alt="...">
    </div>
    <h5 class="fw-bold title text-center" style="font-size: 2vw; color:rgb(166, 159, 255)">Vous le trouverez également dans les aliments d’origine végétale
    </h5>
    <div class="text-center my-4">
        <img src="image13.jpg" class="img-fluid" alt="...">
    </div>
    <div class="fw-bolder" style="font-size: 1.5vw">
        <p>
            Si vous consommez peu ou pas d'aliments d'origine animale, mettez dans votre assiette encore plus d'aliments végétaux riches en fer.
        </p>
    </div>



</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <style>
    .swal-overlay {
        bottom: inherit !important;
    }
    .swal-overlay--show-modal .swal-modal {
        margin-top: -80%;
    }
</style> --}}
<script>
    @if(session()->has('success'))
        swal("", '{{session("success")["msg"]}}', '{{session("success")["key"]}}');
    @endif
</script>


</html>
