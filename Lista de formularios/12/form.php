<?php
  if($_SERVER["REQUEST_METHOD"] == "GET") {
    $pasta = $_GET["pasta"];
    $num_imagens = $_GET["num_imagens"];

    echo "<table>";
    echo "<tr>";

    for($i = 1; $i <= $num_imagens; $i++) {
      echo "<td>";
      echo "<img src='http://localhost/$pasta/$i.jpg' width='150' height='100'>";
      echo "</td>";
    }

    echo "</tr>";
    echo "</table>";
  }
  echo"<a href='exercicio12.html'><button>Voltar</button></a>";
?> 