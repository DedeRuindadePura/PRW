<?php
    $nome = $_POST['name'];
    $data_hoje = date('H:i');
    $partes = explode(':', $data_hoje);
    $data_hora = intval($partes[0])*60; 
    $data_minute = intval($partes[1]); 
    $data_T = $data_hora + $data_minute;
    $saudacao = '';

    if($data_T <= 720){
        $saudacao = 'Bom dia';
    }else if($data_T > 720 && $data_T <=1080){
        $saudacao = 'Boa tarde';
    }else if($data_T > 1080){
        $saudacao = 'Boa noite';
    }
    echo"<h3>$saudacao $nome</h3>";
    echo"<a href='exercicio9.html'><button>Voltar</button></a>";
?>