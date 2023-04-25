<!DOCTYPE html>
<html>
<head>
	<title>Notas do Aluno</title>
</head>
<body>
<?php
	$nome = $_POST["nome"];
	$nota1 = $_POST["nota1"];
	$nota2 = $_POST["nota2"];
	$frequencia = $_POST["frequencia"];

	$media = ($nota1 + $nota2) / 2;

	echo "<h2>Notas do Aluno</h2>";
	echo "<p>Nome: $nome</p>";
	echo "<p>Nota 1: $nota1</p>";
	echo "<p>Nota 2: $nota2</p>";
	echo "<p>Frequência: $frequencia%</p>";
	echo "<p>Média: $media</p>";

	if ($media < 5) {
		echo "<p style='color: red;'>Reprova por nota</p>";
	} else if ($frequencia < 75) {
		echo "<p style='color: red;'>Reprova por frequência</p>";
	} else {
		echo "<p>Aprovado</p>";
	}
?>
</body>
</html>
