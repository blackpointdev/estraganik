<nav class="navbar navbar-expand-lg navbar-dark" id="navbarMain">
    <a class="navbar-brand" href="/">eStraganik.pl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
        <form class="d-inline my-2 my-lg-0 w-100 ml-2">
            <input class="form-control mr-sm-2" type="search" placeholder="Czego szukasz?" aria-label="Search">
        </form>

        <ul class="navbar-nav mr-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navarBasket" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navarBasket">
                    <a class="dropdown-item" href="#">Rower 1</a>
                    <a class="dropdown-item" href="#">Rower 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Kup teraz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        if (isset($_SESSION['email'])) {
                            echo $_SESSION['email'];
                        }
                        else {
                            echo("<i class=\"fas fa-users\"></i>");
                        }
                    ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <?php
                        if (!isset($_SESSION['email'])) {
                            echo("<a class='dropdown-item' href='/login'>Zaloguj</a>
                                  <a class='dropdown-item' href='/register'>Zarejestruj</a>");
                        }
                        else {
                            echo("<a class=\"dropdown-item\" href=\"/create-offer\">Wystaw przedmiot</a>
                                    <a class=\"dropdown-item\" href=\"#\">Zakupione przedmioty</a>
                                    <a class=\"dropdown-item\" href=\"#\">Wiadomości</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"/logout\">Wyloguj</a>");
                        }
                    ?>
                </div>
            </li>
        </ul>
    </div>

    <script src="https://kit.fontawesome.com/6939d4585e.js" crossorigin="anonymous"></script>

</nav>