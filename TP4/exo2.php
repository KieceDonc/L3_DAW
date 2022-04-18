<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Exo1</title>
    <link rel="stylesheet" href="exo1.css" />
  </head>
  <body>
    <?php
      $age = 10;
      $sexe = 'F';

      if($sexe == 'F' && $age >= 21 && $age <= 40){
        echo 'Bienvenue';
      }else{
        echo 'Dehors';
      }
    ?>
</html>