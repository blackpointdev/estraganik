<?php


namespace Src\Controllers;


use Src\System\DBConnection;
use Src\Repositories\ProductRepository;

class HomeController extends Controller
{
    public function show() {
        $dbConnection = (new DBConnection())->connect();
        $productRepository = new ProductRepository($dbConnection);

        $products_array = $productRepository->getSponsoredProducts();

        $this->render('home', ['products' => $products_array]);
    }
}