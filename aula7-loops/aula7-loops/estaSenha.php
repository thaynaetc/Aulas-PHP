<?php
    $senha = $_POST ['senha'];
    $login = $_POST ['login'];

   // echo "{$senha}";//debugar
   // echo "{$login}";

   while(($senha != 123 ) && ($login != "thayna")){
       header('Location: login.php');
   }
   
   echo "bem vindo ao sistema";
?>