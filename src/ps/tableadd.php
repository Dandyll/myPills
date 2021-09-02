<?php
require_once __DIR__.'/../repository/tableRepository.php';

$arlist=$_POST['arlist'];
$med_name=$_POST['med_name'];


tableRepository::saveTable($arlist, $med_name);