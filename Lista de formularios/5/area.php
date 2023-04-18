<!DOCTYPE html>
<html>
<head>
	<title>Área do Terreno</title>
</head>
<body>
	<?php
			$comprimento = $_GET["comprimento"];
			$largura = $_GET["largura"];
			$area = $comprimento * $largura;
			echo "<h2>A área do terreno é: $area m²</h2>";
	
	?>
</body>
</html>
