<?php

namespace Src\Controllers;

class SecurityController extends Controller
{
    public function login() {

        //TODO Create UserRepository here

        if($this->isPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // $user = $userRepository->getUser($email);
            $user = null;

            if (!$user) {
                $this->render('login', ['messages' => ['User with this email not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["id"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=board");
            return;
        }
        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out!']]);
    }
}