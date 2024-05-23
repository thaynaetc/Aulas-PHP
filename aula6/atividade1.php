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
       digite um numero de 1 a 7: <input type="text" name="$diadasemana"><br>
        <input type="submit" name="verificar">
    </form>
</body>
</html>
<?php
    $diadasemana = $_GET ['$diadasemana'];
    switch ($diadasemana){
        case 1;
        echo "\n 1 o dia da semana e igual  a domigo";
        break;
        case 2;
        echo "\n 2 o dia da semana e igual a segunda";
        break;
        case 3;
        echo "\n 3 o dia da semana e igual a terca";
        break;
        case 4;
        echo "\n 4 o dia da semana e igual a quarta";
        break;
        case 5;
        echo "\n 5 o dia da semana e igual a quinta";
        break;
        case 6;
        echo "\n 6 o dia da semana e igual a sexta";
        break;
        case 7;
        echo "\n 7 o dia da semana e igual a sexta";

    }
?>