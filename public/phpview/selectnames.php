<?php
require_once 'src/repository/MedRepository.php';

$med = new MedRepository();

$namearray = $med->getMedstest();
for ($i=0;$i<sizeof($namearray);$i++) {
    echo '<li><a href="#" onclick="test(\''.$namearray[$i]["name"].'\')">'.$namearray[$i]["name"].'</a></li>';
}