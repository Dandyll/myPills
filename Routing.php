<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/MedController.php';
require_once 'src/controllers/permController.php';

class Router {

    public static $routes;

    public static function get($url, $view) {

        self::$routes[$url] = $view;
    }

    public static function post($url, $view) {

        self::$routes[$url] = $view;
    }

    public static function run ($url) {
        $permcontrol = new permController();
        $sessionControl = new SessionController();
        if(!$sessionControl->checkCookieWithDatabase()){
            $url = "login";
        }elseif ($url === 'login'){
            $url = 'home';
        }

        if ($url==='addpill' and $permcontrol->isAdmin()!==2){
            $url='pills';}
        elseif($url==='addpill' and $permcontrol->isAdmin()===2) {
            $url='addpill';
        }

        $action = explode("/", $url)[0];
        if (!array_key_exists($action, self::$routes)) {
            die("Wrong url!");
        }

        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'home';

        $object->$action();
    }
}