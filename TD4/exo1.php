<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Exo1</title>
  </head>
  <body>
    <?php
      echo "date('d / m / y') </br>";
      echo PHP_VERSION; 
      echo "</br>";
      echo PHP_OS;
      echo "</br>";
      $x = "Postgresql";
      $y = "MySQL";
      $z = "Utilisez $x et $y" ;
      $t = "Utilisez $x et $y";
      echo "$x </br>";
      echo "$y </br>";
      echo "$z </br>";
      echo "$t </br>";
      echo "<p>Ceci est un exercice php</p>";
      echo "</br><p>Un exercice pour introduire le langage</p>";
      echo "</br><a href='www.u-bourgogne.fr'>www.u-bourgogne.fr</a>";
      $var1 = "malaise1";
      $var2 = "malaise2";
      echo $var1;
      echo $var2;
      echo "$var1 $var2";
      echo "$var1"."$var2";
      echo "<h1>Calcul sur les variables</h1>";
      $TVA = 0.206;
      $prix = 150;
      $Nombre = 10;
      echo ($TVA * $prix * $Nombre);  
      for ($i = 1; $i <= 15000; $i+=2) {
        echo "$i</br>";
      } 
      for ($i = 0; $i < 500; $i++) {
        echo "Je dois faire des sauvegardes r´eguli`eres de mes ´fichiers.</br>";
      } 
      $fac = 1;
      for ($i = 1;i<=30;$i++){
        $fac=$fac*$i;
      }
      echo $fac;
    ?>
  </body>
</html>