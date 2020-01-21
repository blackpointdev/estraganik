<?php


namespace Src\Controllers;


use Src\Repositories\ProductRepository;
use Src\System\DBConnection;

class ProductListController extends Controller
{
    public function load() {
        // echo $_SERVER['REQUEST_URI'];
        $dbConnection = (new DBConnection())->connect();
        $productRepository = new ProductRepository($dbConnection);

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode( '/', $uri );

        if(!isset($uri[2]) || $uri[2] == '') {
            $products_array = $productRepository->getAllProducts();
        }
        else {
            $products_array = $productRepository->getProductsByCategory($uri[2]);
        }


        $this->render('products', ['products' => $products_array]);
    }
}