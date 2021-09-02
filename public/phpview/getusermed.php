<?php
require_once 'src/repository/UserRepository.php';
$user = new UserRepository();
$email = json_decode($_COOKIE["user"],true)["email"];
$medarray = $user->getUserMeds($email);
print_r($medarray);
for ($i=0;$i<sizeof($medarray);$i++) {
    echo '<option value="'.$medarray[$i]["name"].'" onclick="test(\''.$medarray[$i]["name"].'\')">'.$medarray[$i]["name"].'</option>';
}