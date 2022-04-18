<!DOCTYPE html>
<html lang=”fr”>
<head>
  <meta charset=”utf−8”>
  <title> E x e r ci c e 2 </title>
  <link rel=”stylesheet” type=”text/css” href=”style.css” media=”screen” />
</head>
<body>
  <main>
    <header>
      <?php
        require_once('./config.php');
        if(entete){
          include "./entete.php";
        }
      ?>
      <!-- i c i on met l ’ e n t e t e-->
    </header>
    <div id=”conteneur”>
      <nav>
        <!-- i c i on met l e menu p r i n c i p a l-->
      </nav>
      <section>
        <!-- i c i on met l e con tenu de l a page-->
      </section>
    </div>
    <footer>
      <?php
        require_once('./config.php');
        if(pied){
          include "./pied.php";
        }
      ?>
    </footer>
  </main>
</body>
</html>