<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
echo "{$nome}";
echo "{$idade}";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<body>
   <form action="">
       Digite um nome: <input type="text" name="nome"><br>

       Digite uma idade: <input type="text" name="idade"><br>
       <input type="submit" value="verificar">
      
   </form>
</body>
</body>
</html>
<?php
   $nome = $_GET['nome'];
   $idade = $_GET['idade'];
   echo "{$nome}";
   echo "{$idade}"; 
   
   if($idade >= 18){echo " O nome e {$nome} e tem  {$idade} sendo de maior";}
   else {echo " O nome e {$nome} e tem  {$idade} sendo de menor";}
   
?>