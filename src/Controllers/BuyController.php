<?php


namespace Src\Controllers;


use Src\Repositories\ProductRepository;
use Src\System\DBConnection;

class BuyController extends Controller
{
    public function buyProduct() {
        if(!isset($_SESSION['user_id']) and !isset($_SESSION['email'])) {
            header("Location: /login");
        }

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode( '/', $uri );
        $product_id = $uri[2];

        $dbConnection = (new DBConnection())->connect();
        $productRepository = new ProductRepository($dbConnection);

        $product = $productRepository->getProductById($product_id);

        if(!$product) {
            echo("Produkt nie został znaleziony w bazie danych.");
            $this->render('product');
            return;
        }
        $available = $product->getAvailable() - 1;

        $stmt = $dbConnection->prepare('
            UPDATE Products SET available = :available WHERE id = :product_id;
        ');

        $stmt->bindValue(":available", $available);
        $stmt->bindValue(":product_id", $product_id);
        $stmt->execute();

        $sql = "INSERT INTO Transactions (
                id_buyer, id_seller, id_product, date, ammount
            ) 
            VALUES (
                :id_buyer, :id_seller, :id_product, now(), :ammount
            );";

        $stmt = $dbConnection->prepare($sql);
        $stmt->bindValue(":id_buyer", $_SESSION['user_id']);
        $stmt->bindValue(":id_seller", $product->getIdSeller());
        $stmt->bindValue(":id_product", $product_id);
        $stmt->bindValue(":id_product", $product_id);
        $stmt->bindValue(":ammount", $product->getPrice());

        $result = $stmt->execute();

        if(!$result) {
            $this->render('bought', ['messages' => ['Błąd podczas operacji zakupu!']]);
            return;
        }

        $this->render('bought', ['messages' => ['Zakup zakończony powodzeniem!']]);
        return;
    }
}