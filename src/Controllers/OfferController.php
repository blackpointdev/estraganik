<?php


namespace Src\Controllers;


use Src\Repositories\UserRepository;
use Src\System\DBConnection;

class OfferController extends Controller
{
    public function createOffer() {
        if($this->isPost()) {
            $dbConnection = (new DBConnection())->connect();

            $title = !empty($_POST['name']) ? trim($_POST['name']) : null;
            $description = !empty($_POST['description']) ? trim($_POST['description']) : null;
            $condition = !empty($_POST['condition']) ? trim($_POST['condition']) : null;
            $available = !empty($_POST['available']) ? trim($_POST['available']) : null;
            $category = !empty($_POST['category']) ? trim($_POST['category']) : null;
            $price = !empty($_POST['price']) ? trim($_POST['price']) : null;
            $image = basename($_FILES["image"]["name"]);

            if($image === '') {
                $image = "../../Public/iamges/no-image-icon.png";
            }

            $sql = "INSERT INTO Products (
                title, id_seller, id_category, `condition`, available, price, description, thumbnail_picture
            ) 
            VALUES (
                :title, :id_seller, :id_category, :condition, :available, :price, :description, :thumbnail_picture
            );";
            $stmt = $dbConnection->prepare($sql);

            //Bind our variables.
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(":id_seller", $_SESSION['user_id']);
            $stmt->bindValue(":id_category", $category);
            $stmt->bindValue(':condition', $condition);
            $stmt->bindValue(':available', $available);
            $stmt->bindValue(':price', $price);
            $stmt->bindValue(':description', $description);
            $stmt->bindValue(':thumbnail_picture', $image);

            $result = $stmt->execute();

            if(!$result) {
                $this->render('create_offer', ['messages' => ['Błąd podczas tworzenia oferty!']]);
                return;
            }

            $this->render('create_offer', ['messages' => ['Oferta utworzona pomyślnie!']]);
            return;
        }

        $this->render('create_offer');
    }
}