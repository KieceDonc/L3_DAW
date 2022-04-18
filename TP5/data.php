<?php

  function loadData($fileURi){
    $input = fopen("liste_groupes_projet.csv", "r");

    $array2D = array();
  
    while(!feof($input)) {
      array_push($array2D,explode(";",fgets($input)));
    }
    
    return $array2D;
  }

  function showData($array2D){
    echo '
    <style type="text/css">
      tr:nth-child(2n+1) {
        background-color:gray;
      }
    </style>';
    echo "<table>";
    foreach ($array2D as &$array1D) {
      echo "<tr>";
      foreach($array1D as &$value){
        echo "<td>" . $value . "</td>";      
      }
      echo "</tr>";
    }
    echo "</table>";
  }
?>