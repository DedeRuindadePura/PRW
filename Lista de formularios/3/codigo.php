<?php
      $estados = array(
        "ac" => "Rio Branco",
        "al" => "Maceió",
        "ap" => "Macapá",
        "am" => "Manaus",
        "ba" => "Salvador",
        "ce" => "Fortaleza",
        "df" => "Brasília",
        "es" => "Vitória",
        "go" => "Goiânia",
        "ma" => "São Luís",
        "mt" => "Cuiabá",
        "ms" => "Campo Grande",
        "mg" => "Belo Horizonte",
        "pa" => "Belém",
        "pb" => "João Pessoa",
        "pr" => "Curitiba",
        "pe" => "Recife",
        "pi" => "Teresina",
        "rj" => "Rio de Janeiro",
        "rn" => "Natal",
        "rs" => "Porto Alegre",
        "ro" => "Porto Velho",
        "rr" => "Boa Vista",
        "sc" => "Florianópolis",
        "sp" => "São Paulo",
        "se" => "Aracaju",
        "to" => "Palmas"
      );
      if (isset($_GET['estado'])) {
        $sigla = $_GET['estado'];
        if (array_key_exists($sigla, $estados)) {
          $capital = $estados[$sigla];
          echo "<p> $capital.</p>";
        } else {
          echo "<p>Estado inválido.</p>";
        }
      } else {
        echo "<p>Selecione um estado.</p>";
      }
    ?>