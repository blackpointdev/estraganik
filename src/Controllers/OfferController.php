<?php


namespace Src\Controllers;


use Src\Repositories\UserRepository;
use Src\System\DBConnection;

class OfferController extends Controller
{
    public function createOffer() {
        if($this->isPost()) {
            $dbConnection = (new DBConnection())->connect();
            $userRepository = new UserRepository($dbConnection);

            $title = !empty($_POST['name']) ? trim($_POST['name']) : null;
            $surname = !empty($_POST['surname']) ? trim($_POST['surname']) : null;
            $address = !empty($_POST['address']) ? trim($_POST['address']) : null;
        }
        $this->render('create_offer');
    }
}