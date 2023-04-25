<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numero = $_POST['numero'];

echo "<h2>Tabuada do $numero:</h2>";

echo "<table>";
for ($i=1; $i<=10; $i++) {
	$resultado = $numero * $i;
	echo "<tr><td>$numero x $i = </td><td>$resultado</td></tr>";
}
echo "</table>";
?>

</body>
</html>