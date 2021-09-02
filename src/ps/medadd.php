<?php
require_once __DIR__.'/../repository/MedRepository.php';

$name=$_POST['name'];

$medadd = MedRepository::addusermed($name);

