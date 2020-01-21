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
    <link rel="stylesheet" href="../../Public/css/products.css">

</head>

<body>
<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>

<div class="container-fluid" id="customContainer">
    <div class="card wide-card">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="category-wrapper">
                    <h4>Kategorie</h4>
                </div>
            </div>
            <div class="col-md">

                <?php foreach($products as $product): ?>
                <a class="hyperlink" href="../product/<?= $product->getId() ?>">
                    <div class="row product-row">
                        <div class="col-md-2">
                            <img class="thumbnail rounded mx-auto d-block" src="<?= $product->getThumbnailPicture() ?>"/>
                        </div>
                        <div class="col-md">
                            <div class="product-info-wrapper">
                                <span class="offer-name"><?= $product->getTitle() ?></span>
                                <p class="seller-name"><?= $product->getSeller() ?></p>
                                <span class="sold">Sprzedano: <?= $product->getSold() ?> sztuk</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <span class="product-condition"><?= $product->getCondition()?></span>
                        </div>
                        <div class="col-md-2 price-wrapper">
                            <br>
                            <span class="price"><?= $product->getPrice() ?> zł</span>
                            <span class="shipment-info">Dostawa od <b>30,99 zł</b></span>
                        </div>
                    </div>
                </a>
                <?php endforeach ?>
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