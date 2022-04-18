<?php
  $input = fopen("liste_groupes_projet.csv", "r");

  while(!feof($input)) {
    echo fgets($input). "<br>";
  }
?>