<?php
require_once __DIR__.'/../repository/newUserRepository.php';

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];

newUserRepository::register($name, $surname, $email, $password);