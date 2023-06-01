<?php
//pegar os dados que vem do formulario via METHOD='GET'
//metodos ou variaveis globais
    $nome = $_GET['nome'];
    $CPF = $_GET['cpf'];
    $RG = $_GET['rg'];
    //mostra
    echo "Seu nome é: ", $nome , " Seu CPF é: ", $CPF , " Seu RG é: ", $RG;
?>