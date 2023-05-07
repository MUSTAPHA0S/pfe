<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rendez-vous</title>
</head>

<body>
    @extends('layouts.app')
    @include('layouts.navbar')

    @section('content')


    <script>
        @if(session()->has('success'))
            swal("", '{{session("success")["msg"]}}', '{{session("success")["key"]}}')
        @endif
    </script>


    <ul style="font-size: 1.7vw">
        <li>Vous vous sentez en forme ? Parfait, c’est donc le moment idéal </li>
        <li>Prenez un bon petit-déjeuner ou un déjeuner équilibré avant de venir </li>
        <li>Hydratez-vous : buvez de l’eau ou des jus de fruits avant, pendant et après le don. Évitez les boissons alcoolisées durant les heures qui précèdent le don.</li>
    </ul>


</body>

</html>
