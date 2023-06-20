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
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    // mysqli_query => executa um comando no banco de dados
    $result = mysqli_query($con,$sql);
    // retorna apenas uma linha dos registros retornados
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Listagem de fluxo do caixa</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Codigo</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Historico</th>
        </tr>
    
    <?php
     do{
     echo "<tr>";
     echo "<td>".$row['id']."</td>";
     echo "<td>".$row['data']."</td>";
     echo "<td>".$row['tipo']."</td>";
     echo "<td>".$row['historico']."</td>";
     echo "<td><a href='altera_fluxo_caixa.php?id="
                .$row['id']."'>Alterar</a> </td>";
     echo "<td><a href='excluir_fluxo_caixa.php?ido="
                .$row['id']."'>Deletar</a> </td>";
                
     echo "</tr>";
     }while($row = mysqli_fetch_array($result))
    ?>
    <a href="index.php">Voltar</a>
</table>
</body>
</html>