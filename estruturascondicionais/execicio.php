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

       nota1: <input type="text" name="numero1"><br>
       nota2: <input type="text" name="numero2"><br>
       nota3: <input type="text" name="numero3">
       <br>
       <input type="submit" value="verificar">
      
   </form>  
</body>
</html>
<?php
$numero1 = $_GET ['numero1'];
$numero2 = $_GET ['numero2'];
$numero3 = $_GET ['numero3'];
$media = (($numero1 * 1)+($numero2 * 1)+($numero3 * 2))/4;

echo "A media do aluno foi: {$media}";

 if ($media <7){echo"O aluno esta reprovado";}
 else {echo "O aluno esta aprovado";}

?>
