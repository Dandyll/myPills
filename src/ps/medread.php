<?php
require_once __DIR__.'/../repository/MedRepository.php';

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];

$meddetails = MedRepository::getMedforkrzysiek($name);

$JSON = array_values($meddetails);

print_r(json_encode($JSON));