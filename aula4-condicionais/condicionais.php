<?php
   $numero = $_GET['numero'];
   echo "{$numero}";
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
       Numero:<input type="text" name="numero"><br>
       <input type="submit" value="verificar">
   </form>
</body>
</html>
<?php
    $numero = $_GET['numero'];
    echo "{$numero}";

    if($numero % 2 == 0){ echo " O numero é par";}
    else {echo " O numero e impar";}
   
?>