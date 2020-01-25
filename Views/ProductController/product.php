<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $product->getTitle() ?> - eStraganik.pl</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Public/css/style.css">
    <link rel="stylesheet" href="../../Public/css/product.css">

</head>

<body>
<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>

<div class="container-fluid" id="customContainer">
    <div class="card wide-card">
        <div class="row">
            <div class="col-md-4 img-wrapper">
                <img class="img-fluid rounded mx-auto d-block" src="<?= $product->getThumbnailPicture() ?>"/>
            </div>
            <div class="col-md">
                <div class="row">
                    <h2 class="offer-name"><?= $product->getTitle() ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <span class="seller-name"><?= $product->getSeller() ?></span>
                    </div>
                    <div class="col-md">
                        <span class="available">Dostępnych sztuk: <b><?= $product->getAvailable() ?></b></span>
                    </div>
                </div>
                <div class="row buy-row">
                    <div class="buy-container">
                        <div class="row price-label-wrapper">
                            <label class="price-label">Cena</label>
                            <label class="price"><?= $product->getPrice() ?> zł</label>
                        </div>
                        <div class="row btns-wrapper">
                            <button class="btn">DODAJ DO KOSZYKA</button>
                            <button class="btn">KUP TERAZ</button>
                        </div>
                    </div>
                </div>
                <p class="return-note">Zwroty: <b>bezpłatne w granicach Polski!</b></p>
            </div>
        </div>
        <div class="row description-container">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'description')" id="defaultOpen">Opis</button>
                <button class="tablinks" onclick="openTab(event, 'shipment')">Opcje dostawy</button>
            </div>
        </div>
        <div class="row description-container">
            <div class="tabcontent" id="description">
                <?= $product->getDescription() ?>
            </div>
            <div class="tabcontent" id="shipment">
                No więc jest taka sprawa, nie ma dostawy hehe
            </div>
        </div>
    </div>
</div>

<?php include(dirname(__DIR__).'/Common/footer.php'); ?>


<script src="../../Public/js/tabs.js"></script>

<script>
    document.getElementById("defaultOpen").click();
</script>

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