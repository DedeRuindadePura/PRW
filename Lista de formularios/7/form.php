<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORMACÕES</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$dias_de_vida = $idade * 365;

echo "Olá, " . $nome . "! Você tem " . $dias_de_vida . " dias de vida.";
?>

</body>
</html>