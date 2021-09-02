<?php
require_once 'src/repository/MedRepository.php';

$med = new MedRepository();
/*
$namearray = $med->getMedstest();
for ($i=0;$i<sizeof($namearray);$i++) {
    echo '<option value="'.$namearray[$i]["name"].'" onclick="test(\''.$namearray[$i]["name"].'\')">'.$namearray[$i]["name"].'</option>';
}
*/

require_once 'src/repository/MedRepository.php';

$med = new MedRepository();
$email = json_decode($_COOKIE["user"], true)["email"];
$namearray = $med->getUserMeds($email);
for ($i = 0; $i < sizeof($namearray); $i++) {
    echo '<option value="' . $namearray[$i]["name"] . '" onclick="test(\'' . $namearray[$i]["name"] . '\')">' . $namearray[$i]["name"] . '</option>';
}