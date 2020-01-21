<?php


namespace Src\Controllers;


class ProductController extends Controller
{
    public function showProduct() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode( '/', $uri );
        $product_id = $uri[2];


        $this->render('product');
    }
}