<?php
require_once __DIR__.'/../repository/tableRepository.php';


$medname=$_POST['medname'];


tableRepository::readTable($medname);