<?php
  $input = fopen("liste_groupes_projet.csv", "r");

  $array2D = array();

  while(!feof($input)) {
    array_push($array2D,explode(";",fgets($input)));
  }
  
  foreach ($array2D as &$array1D) {
    foreach($array1D as &$value){
      echo $value . ";";      
    } 
    echo "</br>";
  }
?>