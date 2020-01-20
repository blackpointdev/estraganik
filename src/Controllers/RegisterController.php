<?php


namespace Src\Controllers;


use Src\Repositories\UserRepository;
use Src\System\DBConnection;

class RegisterController extends Controller
{
    public function register() {
        if($this->isPost()) {
            $dbConnection = (new DBConnection())->connect();
            $userRepository = new UserRepository($dbConnection);

            $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
            $surname = !empty($_POST['surname']) ? trim($_POST['surname']) : null;
            $address = !empty($_POST['address']) ? trim($_POST['address']) : null;
            $city = !empty($_POST['city']) ? trim($_POST['city']) : null;
            $zip = !empty($_POST['zip']) ? trim($_POST['zip']) : null;
            $country = !empty($_POST['country']) ? trim($_POST['country']) : null;
            $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
            $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
            $terms = $_POST['terms'];

            $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));

            $user = $userRepository->getUser($email);

            if ($user) {
                $this->render('register', ['messages' => ['Użytkownik o podanym adresie email już istnieje.']]);
                return;
            }

            if (!$terms){
                $this->render('register', ['messages' => ['Zaakceptuj Regulamin serwisu.']]);
                return;
            }

            $sql = "INSERT INTO Users (email, password, name, surname, id_address) VALUES 
                    (:email, :password, :name, :surname, :id_address)";
            $stmt = $dbConnection->prepare($sql);

            //Bind our variables.
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $passwordHash);
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':surname', $surname);
            $fullAddress = $address . ';' . $city . ';' . $zip . ';' . $country;
            $stmt->bindValue(':id_address', $fullAddress);



            //Execute the statement and insert the new account.
            $result = $stmt->execute();
            $this->render('register', ['messages' => ['Konto utworzone pomyślnie!']]);
            return;
        }
        $this->render('register');
    }
}