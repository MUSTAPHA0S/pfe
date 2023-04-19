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
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a class="navbar-brand" href="/siteweb/public">
                        <img class="logo" src="logo2.png" alt=".."></a> </span>

                <div class="text logo-text">
                    <span class="name">Don de vie</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/siteweb/public">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Acceuill</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/siteweb/public/home">
                            <i class='bx  icon'></i>
                            <span class="text nav-text">Infos personnel</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx  icon'></i>
                            <span class="text nav-text">Historique
                            </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx  icon'></i>
                            <span class="text nav-text">resultats</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>

    </nav>

    <section class="home">

    </section>

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

</body>

</html>
