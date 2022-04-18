<?php
  $input = fopen("liste_groupes_projet.csv", "r");

  $array = array();

  while(!feof($input)) {
    array_push($array,fgets($input));
  }
  foreach ($array as &$value) {
    echo $value . "</br>"; 
  }
?>