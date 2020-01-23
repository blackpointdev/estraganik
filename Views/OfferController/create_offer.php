<?php
if(!isset($_SESSION['id']) and !isset($_SESSION['email'])) {
    header("Location: /login");
}
?>

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
    <link rel="stylesheet" href="../../Public/css/offer.css">

</head>

<body>
<?php include(dirname(__DIR__) . '/Common/navbar.php'); ?>

<div class="container-fluid" id="customContainer">
    <div class="card wide-card">
        <h2 class="medium-header">Stwórz nową ofertę</h2>

        <div class="row register-row">
            <div class="col-md-7">
                <form id="new-offer-form" action="/create-offer" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="name-input">Tytuł oferty</label>
                            <input name="name" type="text" class="form-control" id="name-input"
                                   placeholder="Tytuł..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="description-input">Treść oferty</label>
                            <textarea name="description" class="form-control" id="description-input"
                                      placeholder="Opis..." required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="condition-input">Stan</label>
                            <input name="condition" type="text" class="form-control" id="condition-input"
                                   placeholder="Nowy/używany" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="category-input">Kategoria</label>
                            <select name="category" class="form-control" id="category-input">
                                <option value="1">Elektronika</option>
                                <option value="2">Sport</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="available-input">Liczba sztuk</label>
                            <input name="available" type="number" class="form-control" id="available-input"
                                   value="1" required>
                        </div>
                        <div class="form-group col-md">
                            <label for="price-input">Cena</label>
                            <input name="price" type="text" class="form-control" id="price-input"
                                      placeholder=". . . zł" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md">
                            <label for="image-input">Zdjęcie</label>
                            <input name="image" type="file" class="form-control-file" id="image-input"
                                   placeholder=". . . zł">
                        </div>
                    </div>

                    <div class="submit-wrapper">
                        <button type="submit" class="btn">UTWÓRZ OFERTĘ</button>
                    </div>
                </form>

                <?php
                if (isset($messages)) {
                    echo("<div class='alert alert-primary'>");
                    foreach ($messages as $message) {
                        echo $message;
                    }
                    echo("</div>");
                }
                ?>
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