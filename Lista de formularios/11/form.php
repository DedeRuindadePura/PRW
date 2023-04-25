<?php
$prontuario = $_POST['prontuario'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$periodo = $_POST['periodo'];
$modulo = $_POST['modulo'];

if (empty($prontuario)) {
    echo "O campo Prontuário não pode estar em branco.<br>";
}

if (empty($nome)) {
    echo "O campo Nome não pode estar em branco.<br>";
}

if ($idade < 15 || $idade > 75) {
    echo "A idade deve ser um valor entre 15 e 75 anos.<br>";
}

if ($periodo != "V" && $periodo != "N") {
    echo "O período deve ser V-Vespertino ou N-Noturno.<br>";
}

if ($modulo < 1 || $modulo > 4) {
    echo "O módulo deve ser um valor entre 1 e 4.<br>";
}
if (empty($prontuario) == false && empty($nome) == false && ($idade >= 15 && $idade <= 75) && ($periodo == "V" || $periodo == "N") && ($modulo >= 1 && $modulo <= 4)) {
    echo "Prontuário: $prontuario<br>";
    echo "Nome: $nome<br>";
    echo "Idade: $idade anos<br>";
    echo "Período: ";
    if ($periodo == "V") {
        echo "Vespertino<br>";
    } else {
        echo "Noturno<br>";
    }
    echo "Módulo: $modulo<br>";
}
?>
