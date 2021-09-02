<?php


class permController
{
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }

 function isAdmin(){


     $stmt = $this->database->connect()->prepare('
            SELECT permission FROM users WHERE email=:email
        ');
     $stmt->bindParam(':email', json_decode($_COOKIE["user"], true)["email"], PDO::PARAM_STR);
     $stmt->execute();
     $respond = $stmt->fetch(PDO::FETCH_ASSOC);

     return $respond['permission'];
 }
}