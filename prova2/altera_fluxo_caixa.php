<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Alterar Fluxo de Caixa</h1>
    <form action="altera_fluxo_caixa.php" method="POST" enctype="multipart/form-data"> 

        <div>
            <label>Data</label>
            <input type="date" name="data">
        </div>
        <div>
            <p>Tipo:</p>
            <input type="radio" name="tipo" value="Entrada">
            <label for="Entrada">Entrada</label><br>
            <input type="radio" name="tipo" value="Saida">
            <label for="Saida">Saida</label>
        </div>
        <div>
            <label for="valor">Valor:</label>
	<input type='number' id='valor' name='valor' required>
        </div>
        <div>
            <label for="historico">Historico:</label>
	<input type='text' id='historico' name='historico' required>
        </div>
        <div>
            <label for="cheque">Cheque:</label>
	<select id="cheque" name="cheque">
		<option value="sim">Sim</option>
		<option value="nao">Não</option>
	</select>
        </div>
        <div>        
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
