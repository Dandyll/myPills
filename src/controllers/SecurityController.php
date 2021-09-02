<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';


class SecurityController extends AppController
{
    public function login()
    {
        $userRepository = new UserRepository();
        $sessionControl = new SessionController();


        if(!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $user = $userRepository->getUser($email);

        if(!$user) {
            return $this->render('login', ['message'=>['uzytkownik nie istnieje']]);
        }

        if ($user->getEmail()!== $email) {
            return $this->render('login', ['message'=>['Nazwa Uzytkowanika nie istnieje!']]);
        }

        if ($user->getPassword()!==$password){
            return $this->render('login', ['message'=>['niepoprawne haslo']]);
        }

        $sessionControl->setCookie($user->getEmail());

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/");
    }

    public function logout(){
        $sessionControl = new SessionController();
        $sessionControl->deleteCoockieInDatabase();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/");
    }

}