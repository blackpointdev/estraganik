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
    <link rel="stylesheet" href="../../Public/css/register.css">

</head>

<body>
<?php include(dirname(__DIR__) . '/Common/navbar.php'); ?>

<div class="container-fluid" id="customContainer">
    <div class="card" id="register-card">
        <h2 class="medium-header">Załóż konto</h2>

        <div class="row register-row">
            <div class="col-md-7">
                <form id="login-form" action="/register" method="post">
                    <div class="row register-row">
                        <div class="form-group col-md">
                            <label for="name-input">Imię</label>
                            <input name="name" type="text" class="form-control" id="name-input"
                                   placeholder="Jan">
                        </div>

                        <div class="form-group col-md">
                            <label for="surname-input">Hasło</label>
                            <input name="surname" type="text" class="form-control" id="surname-input"
                                   placeholder="Kowalski">
                        </div>
                    </div>
                    <div class="row register-row">
                        <div class="form-group col-md">
                            <label for="address-input">Adres</label>
                            <input name="address" type="text" class="form-control" id="address-input"
                                   placeholder="Zielona 23/54">
                        </div>
                    </div>

                    <div class="row register-row">
                        <div class="form-group col-md">
                            <label for="city-input">Miasto</label>
                            <input name="city" type="text" class="form-control" id="city-input"
                                   placeholder="Kraków">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="zip-input">Kod pocztowy</label>
                            <input name="zip" type="text" class="form-control" id="zip-input"
                                   placeholder="00-000">
                        </div>

                        <div class="form-group col-md">
                            <label for="country-input">Kraj</label>
                            <input name="country" type="text" class="form-control" id="country-input"
                                   placeholder="Polska">
                        </div>
                    </div>

                    <div class="row register-row">
                        <div class="form-group col-md">
                            <label for="email-input">Email</label>
                            <input name="email" type="text" class="form-control" id="email-input"
                                   placeholder="email@example.com">
                        </div>

                        <div class="form-group col-md">
                            <label for="password-input">Hasło</label>
                            <input name="password" type="password" class="form-control" id="password-input"
                                   placeholder="&#8226&#8226&#8226&#8226">
                        </div>
                    </div>

                    <div class="submit-wrapper">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-password-check">
                            <label class="form-check-label" for="remember-password-check">
                                Oświadczam że znam i akceptuję <a href="#">Regulamin</a> serwisu eStraganik.pl</label>
                        </div>
                    </div>
                    <div class="submit-wrapper">
                        <button type="submit" class="btn">ZAREJESTRUJ SIĘ</button>
                    </div>
                </form>

                <?php
                if (isset($messages)) {
                    echo("<div class='alert alert-danger'>");
                    foreach ($messages as $message) {
                        echo $message;
                    }
                    echo("</div>");
                }
                ?>
            </div>
            <div class="col-md align-self-center">
                <div id="socialmedia-buttons">
                    <button type="submit" class="btn" id="fb-btn">Zarejestruj się przez Facebook'a</button>
                    <button type="submit" class="btn" id="google-btn">Zarejestruj się przez Google</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(dirname(__DIR__) . '/Common/footer.php'); ?>

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