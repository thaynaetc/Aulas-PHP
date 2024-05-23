<?php
   $estadoCivil = $_GET['estadoCivil'];
   $nome = $_GET['nome'];

   switch ($estadoCivil){
    case 1:
        $estadoCivil = "Solteiro";
        break;
    case 2:
        $estadoCivil = "Casado";
        break;
        
    case 3:
        $estadoCivil = "Divorciado";
        break;
    case 4:
        $estadoCivil =  "Viuvo"; 
        break;
    case 5:
        $estadoCivil = "Uniao estavel";
   }
   echo"O estado civil do ".$nome." é ".$estadoCivil;
?>