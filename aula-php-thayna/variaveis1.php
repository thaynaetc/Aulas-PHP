<?php 
    //declaracao de variaveis
    $nome = "Pedro";
    $numero;
    $salario = 1000.50;
       $numeros = array(1,2,"3", "texto");
       $teste = false;
    //impressao com interpolacao
    echo "O nome é: {$nome} e o salario é :{$salario}";
    //impressao com concatenacao
    echo "\nnome ".$nome. " e o salario ".$salario. "\n";
    //impressao com var_dump()
    var_dump($nome);

    echo '<pre>';
    print_r($numeros);
    var_dump($teste);
    
?>