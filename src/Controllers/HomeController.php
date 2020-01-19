<?php


namespace Src\Controllers;


class HomeController extends Controller
{
    public function show() {
        $this->render('home');
    }
}