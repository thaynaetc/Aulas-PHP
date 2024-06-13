<?php
    function calcularimc ($peso, $altura){
        $imc = $peso/(pow($altura,2));
        return $imc;
    }

    //debugar
    $teste = calcularimc(44,1.66);
    echo "{$teste}";

    function situacao($imc){
        if($imc < 16){
            echo "O imc é : {$imc}. Situacao: baixo peso";
        }else if ($imc >= 16 && $imc <= 25){
            echo "O imc é : {$imc}. Situacao: saudável";
        }else if ($imc > 25 && $imc <29){
            echo "O imc é : {$imc}. Situacao: sobrepeso";
        }else{
            echo "O imc é : {$imc}. Situacao: obeso";
        }
    }
    //pegando as informacoes do formulario
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = calcularimc($peso,$altura);
    situacao($imc);
?>