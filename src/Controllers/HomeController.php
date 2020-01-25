<?php


namespace Src\Controllers;


use Src\System\DBConnection;
use Src\Repositories\ProductRepository;

class HomeController extends Controller
{
    public function show() {
        $dbConnection = (new DBConnection())->connect();
        $productRepository = new ProductRepository($dbConnection);


        $this->render('home');
    }
}