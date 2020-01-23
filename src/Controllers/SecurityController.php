<?php

namespace Src\Controllers;

use Src\Repositories\UserRepository;
use Src\System\DBConnection;

class SecurityController extends Controller
{
    private DBConnection $dbConnection;

    public function login() {
        $dbConnection = (new DBConnection())->connect();
        $userRepository = new UserRepository($dbConnection);

        if($this->isPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $userRepository->getUser($email);

            if (!$user) {
                $this->render('login', ['messages' => ['Użytkownik o podanym adresie email nie istnieje.']]);
                return;
            }

            $passwordHash = $user->getPassword();
            $isPasswordValid = password_verify($password, $passwordHash);
            if (!$isPasswordValid) {
                $this->render('login', ['messages' => ['Niepoprawne hasło!']]);
                return;
            }

            $_SESSION['user_id'] = $user->getId();
            $_SESSION['email'] = $user->getEmail();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            return;
        }
        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['Zostałeś pomyślnie wylogowany!']]);
    }
}