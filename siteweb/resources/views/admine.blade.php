<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css1.css')}}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--<title>Dashboard Sidebar Menu</title>-->
    <style>
        .table {
            height: 20vw;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    @include('layouts.sidebare')
    <div class="table mx-auto pt-4" style="width: 40vw">
        @if (isset($donneurs))
        @foreach($donneurs as $donneur)
        <tr>
            <td>{{$donneur->nom}}</td>
            <td> {{$donneur->prenom}}</td>
            <td> {{$donneur->dateNaissance}}</td>
            <td> {{$donneur->telephone}}</td>
            <td> {{$donneur->email}}</td>
            <td> {{$donneur->dateNaissance}}</td>
        </tr>
        @endforeach
        @endif
    </div>
</body>
<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";
        }
    });
</script>

</html>
