<?php
  include "data.php";

  $output = loadData("./liste_groupes_projet.csv");
  showData($output);
?>