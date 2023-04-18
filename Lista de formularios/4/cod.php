<!DOCTYPE html>
<html>
  <head>
    <title>Ano Bissexto</title>
  </head>
  <body>
    <?php
      $ano = $_GET['ano'];

      if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        echo "<h1>O ano $ano bissexto.</h1>";
      } else {
        echo "<h1>O ano $ano não bissexto.</h1>";
      }
    ?>
  </body>
</html>
