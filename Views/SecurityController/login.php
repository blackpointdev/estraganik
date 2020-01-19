<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>eStraganik.pl - Twój internetowy stragan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Public/css/style.css">

</head>

<body>
    <?php include(dirname(__DIR__).'/Common/navbar.php'); ?>

    <div class="container-fluid" id="customContainer">
        <div class="row customRow">
            <div class="col-md customColumn">
                <div class="card">
                    <h2 class="medium-header">Zaloguj się</h2>

                    <form id="login-form">
                        <div class="form-group">
                            <label for="email-input">E-mail</label>
                            <input type="email" class="form-control" id="email-input" aria-describedby="emailHelp"
                                placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="password-input">Hasło</label>
                            <input type="password" class="form-control" id="password-input"
                                placeholder="&#8226&#8226&#8226&#8226">
                        </div>

                        <div class="submit-wrapper">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember-password-check">
                                <label class="form-check-label" for="remember-password-check">Zapamiętaj hasło</label>
                            </div>
                        </div>
                        <div class="submit-wrapper" id="forgot-password">
                            <a href="#">Zapomniałeś hasła?</a>
                        </div>
                        <div class="submit-wrapper">
                            <button type="submit" class="btn">ZALOGUJ SIĘ</button>
                        </div>
                    </form>
                    
                    <div id="need-account">
                        <span>Potrzebujesz konta?</span>
                    </div>

                    <div id="register-link"><a href="#">Zarejestruj się</a></div>
                </div>
            </div>
            <div class="col-md customColumn">
                <div class="card">
                    <div id="advertisement">
                        REKLAMA HERE
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; blackpoint</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>