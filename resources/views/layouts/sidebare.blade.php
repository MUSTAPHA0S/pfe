<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <a class="navbar-brand" href="/">
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
                    <a href="/">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Acceuill</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="profile">
                        <i class='bx  icon'></i>
                        <span class="text nav-text">Informations </br> personnel</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="profile">
                        <i class='bx  icon'></i>
                        <a href="{{ route("appointments.create") }}"><span class="text nav-text">Je prend un </br>rendez-vous</span></a>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
