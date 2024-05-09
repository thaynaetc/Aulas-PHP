<?php
   $nome = $_GET['nome'];
   $peso = $_GET['peso'];
   $altura = $_GET['altura'];
   $imc = ($peso / ($altura * $altura));
    

   echo "{$nome}";
   echo "{$peso}";
   echo "{$altura}";
   echo "{$imc}";
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
   <form action="">
    Nome:<input type="text" name="nome"><br>
    Peso:<input type="text" name="peso"><br>
    Altura:<input type="text" name="altura"><br><br>
    <input type="submit" value="verificar">
   </form> 
</body>
</html>
<?php
    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc = ($peso / ($altura * $altura));

    echo "{$nome}";
    echo "{$peso}";
    echo "{$altura}";
    echo "{$imc}";



?>