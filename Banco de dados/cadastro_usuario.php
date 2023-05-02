<?php 
    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];
   
echo "<h1>Dados do Usuario</h1>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Telefone: $fone <br>";
echo "Senha: $senha <br>";

$sql = "insert into usuario
(nome_usuario, fone_usuario, email_usauario, senha)";
values ('cassio', '(18)99699-7195', 'dede@gmail.com', '1234');
$sql .= "values ('".$nome."','".$email."','".$fone."','".$senha."')";
echo $sql."<br";
$result = mysqli_querry($con, $sql);
if($result)
    echo "Dados Cadastrados com sucesso!";
else
    echo "Erro no cadastro!";

?>