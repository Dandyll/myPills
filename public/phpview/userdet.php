<?php
require_once 'src/repository/UserRepository.php';
$user = new UserRepository();
$email = json_decode($_COOKIE["user"],true)["email"];
$namearray = $user->getUserdet($email);
    echo '<div class="name">'.$namearray["name"]." ".$namearray["surname"].'</div>';


