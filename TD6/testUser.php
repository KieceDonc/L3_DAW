<?php
  
  require_once('./user.php');

  $user = new User('Kiece','Verstracte','Valentin');
  $trajet = new Trajet(array('1','Dijon','Lyon','28 aout 1990','30 décembre 3000',29,50,'Kiece'));
  echo $trajet->id . '</br>';
  echo $trajet->depart . '</br>';
  echo $trajet->arrivee . '</br>';
  echo $trajet->dateDepart . '</br>';
  echo $trajet->dateArrivee . '</br>';
  echo $trajet->nbPlaces . '</br>';
  echo $trajet->prix . '</br>';
  echo $trajet->conducteurLogin . '</br>';
?>