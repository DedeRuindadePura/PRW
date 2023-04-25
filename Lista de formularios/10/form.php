<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Resultado da venda de camisetas</h1>
	<?php
		$qtd_pequenas = $_POST["qtd_pequenas"];
		$qtd_medias = $_POST["qtd_medias"];
		$qtd_grandes = $_POST["qtd_grandes"];

		$total_arrecadado = $qtd_pequenas * 10 + $qtd_medias * 12 + $qtd_grandes * 15;

		echo "Quantidade de camisetas pequenas vendidas: " . $qtd_pequenas . "<br>";
		echo "Quantidade de camisetas médias vendidas: " . $qtd_medias . "<br>";
		echo "Quantidade de camisetas grandes vendidas: " . $qtd_grandes . "<br>";
		echo "Total arrecadado: R$ " . $total_arrecadado;
	?>
</body>
</html>