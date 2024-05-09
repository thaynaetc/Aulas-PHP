<?php
//condicionais aninhadas
    $idade = 18;

    if (($idade >= 16 && $idade <18) || $idade >= 70){
        echo "Voto facultativo";
    }else if ($idade >= 18 && $idade <70){
        echo "Voto obrigatório";
    }else{
        echo "Não voto";
    }
?>