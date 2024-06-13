<?php
    //definiçao da funçao
     function soma($n1, $n2){
        $res = $n1 + $n2;
        echo "\nSoma: {$res}";
     }

    //chamada da função/invocaçao
    soma(16,95);
    soma(23,54);

    //definiçao da funçao
    function sub ($num1, $num2){
        $res = $num1 - $num2;
        return $res;
    }

    $retornofuncao = sub(5,2);
    echo "\nRetorno: {$retornofuncao}";

    function calcular ($n1, $n2){
        $resSoma = soma ($n1, $n2);
        $resSub = sub($n1, $n2);
        echo"\nSubtracao: {$resSub}";
    }

    echo "\nRetorno: {$retornofuncao}";
    calcular (4,5);
 
?>