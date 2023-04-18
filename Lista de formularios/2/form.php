<!DOCTYPE html>
<html>
  <head>
    <title>Processamento de Dados do Formulário</title>
  </head>
  <body>
    <h1>Processamento de Dados do Formulário</h1>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nome = $_GET["nome"];
        $mensagem = $_GET["mensagem"];
        $opcao1 = isset($_GET["checkbox"]) ? "Opção 1 selecionada" : "Opção 1 não selecionada";
        $opcao2 = $_GET["radio"] == "opcao1" ? "Opção 2 selecionada" : "Opção 3 selecionada";
        $selecao = $_GET["selecao"];
        
        echo "<p>Nome: $nome</p>";
        echo "<p>Mensagem: $mensagem</p>";
        echo "<p>$opcao1</p>";
        echo "<p>$opcao2</p>";
        echo "<p>Seleção: $selecao</p>";
      }
    ?>
  </body>
</html>