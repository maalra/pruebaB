<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ordenador</title>
  </head>
  <body>
    <?php
    include "claseordenador.php";
    $marca = new claseordenador();
    $marca = setmarca("apple");

    $marca->setmarca("apple ");
    echo "<br>marca: " .$marca-> getmarca();
     ?>

  </body>
</html>
