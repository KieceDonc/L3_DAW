<?php
  
  require_once('./voiture.php');

  $vago = new Voiture('C3',"Grise","000-000-000");
  echo $vago->affiche();
?>