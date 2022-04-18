<?php

  function getEtu($fileURI){
    $input = fopen($fileURI, "r");

    $array2D = array();
  
    while(!feof($input)) {
      $value = explode(";",fgets($input));
      $group = $value[3];
      array_push($array2D[$group],$value);
    }
  }

  function showEtu($array2D){
    foreach ($arr as $key => $value) {
      echo 'Groupe n° '. $key . 'composé de ';
    }
  }
?>