<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>eStraganik.pl - Twój internetowy stragan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/css/style.css">

</head>

<body>
    <?php include(dirname(__DIR__).'/Common/navbar.php'); ?>

    <div class="container-fluid" id="customContainer">
        <div class="row customRow">
            <div class="col-sm-2 customColumn">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a class="hyperlink" href="/products/1">Elektronika</a></li>
                    <li class="list-group-item"><a class="hyperlink" href="/products/2">Sport</a></li>
                </ul>
            </div>
            <div class="col-sm customColumn">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../Public/iamges/car1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row customRow">
            <div class="col-sm customColumn">
                <span id="recommendedLabel">Polecane dla Ciebie</span>
                <div class="card" style="width: 18rem;">
                    <img src="../../Public/iamges/rower.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Szybki rower</h5>
                        <p class="card-text">Taniocha szybciutki rower jest</p>
                        <a href="#" class="btn btn-primary">Kup teraz</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include(dirname(__DIR__).'/Common/footer.php'); ?>

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