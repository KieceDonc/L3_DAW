<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Exo1</title>
    <link rel="stylesheet" href="exo3.css" />
  </head>
  <body>
    <table>
      <?php
        echo "<tr>";
        for($x = 0; $x < 11; $x++){
          echo "<th>$x</th>";
        }
        echo "</tr>";
   
        for($y = 1; $y <= 10; $y++){
          echo "<tr>";
          echo "<th>$y</th>";
          for($x = 1; $x <= 10; $x++){
            echo "<td>$y x $x = " . $y*$x . "</td>";
          }
          echo "<tr>";
        }

        echo "<p> ".recursif(5)."</p>";
        function recursif($in){
          if($in == 0){
            return 1;
          }else{
            return $in * recursif($in-1);
          }
        }
        ?>
    </table>
</html>