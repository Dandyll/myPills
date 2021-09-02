<?php


require 'Routing.php';
require  __DIR__.'/src/controllers/SessionController.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('index', 'DefaultController');
Router::get('home', 'DefaultController');
Router::get('pills', 'DefaultController');
Router::get('logout', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('addpill', 'MedController');
Router::post('editUser', 'DefaultController');

Router::run($path);

