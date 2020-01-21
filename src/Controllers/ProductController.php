<?php


namespace Src\Controllers;


use Src\Repositories\ProductRepository;
use Src\System\DBConnection;

class ProductController extends Controller
{
    public function showProduct() {
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
        $this->render('product', ['product' => $product]);
    }
}