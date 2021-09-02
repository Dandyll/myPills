<?php

require_once 'src/repository/UserRepository.php';
$user = new UserRepository();
$email = json_decode($_COOKIE["user"], true)["email"];
$namearray = $user->getUserdet($email);
echo '<a class="birth"> Data Urodzenia</a><a class="birth2">' . $namearray["birth_date"] . '</a><a class="sex"> Płeć</a><a class="sex2">' . $namearray["sex"] . '</a><a class="blood"> Grupa Krwi</a><a class="blood2">' . $namearray["blood"] .'</a><a class="weight"> Waga</a><a class="weight2">' . $namearray["weight"].'</a>';

