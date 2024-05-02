<?php
//receber os dados do formulario e guarda na memoria
    $nome = $_GET["nome"];// pode colocar o metodo post
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    $soma = $numero1 + $numero2;

    echo "{$nome}";
    echo "<br>O resultado da operacao é: ".$soma;
    
?>