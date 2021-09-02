<?php
require_once 'src/repository/DiseaseRepository.php';

$disease = new DiseaseRepository();

$namearray = $disease->getDiseases();
for ($i=0;$i<sizeof($namearray);$i++) {
    echo '<li><a (\''.$namearray[$i]["name"].'\')">'.$namearray[$i]["name"].'</a></li>';
}