<?php 
     function calcularmedia($nota1, $nota2, $nota3){
        $media = (($nota1)+($nota2)+($nota3)/3);
        return $media;
     }
     function situacao($media){
        if($media >= 7){
            echo "A media e: {$media}. Situaçao: aprovado ";
        }else if($media >= 4 && $media < 7){
            echo "A media e: {$media}. Situaçao: recuperaçao ";
        }else{
            echo "A media e: {$media}. Situaçao: reprovado ";
        }
     }
     $nome = $_GET['nome'];
     $nota1 = $_GET['nota1'];
     $nota2 = $_GET['nota2'];
     $nota3 = $_GET['nota3'];
     
     echo "O nome do aluno é:{$nome} <br>"; 
     $media = calcularmedia($nota1, $nota2, $nota3); 
     situacao($media);
?>