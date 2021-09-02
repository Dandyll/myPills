<?php

require_once __DIR__ . '/../repository/newUserRepository.php';

$age = $_POST['age'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$blood = $_POST['blood'];
$weight = $_POST['weight'];
$birth_date = $_POST['birth_date'];

newUserRepository::EditUser($age, $phone, $sex, $blood,$weight,$birth_date);

