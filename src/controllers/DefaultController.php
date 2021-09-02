<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function home()
    {
        $this->render('home');
    }

    public function login()
    {
        $this->render('login');
    }

    public function pills()
    {
        $this->render('pills');
    }

    public function editUser()
    {
        $this->render('pills');
    }

}
