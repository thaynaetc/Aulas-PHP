<?php
    
    $numero = 5;
    $contador = 1;
    $res;

    /*while($contador <= 10){
        $res = $numero * $contador;
        echo "\n{$numero} X {$contador} = {$res}";
        $contador++;
    }*/
    do{
        $res = $numero * $contador;
        echo "\n{$numero} X {$contador} = {$res}";
        $contador++; 
    }while($contador <= 10);
?>