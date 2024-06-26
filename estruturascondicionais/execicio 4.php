<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baskhara</title>
</head>
<body>
    <br>
    <h1>Calculo de raiz em Baskhara</h1>
    <form action=""><br><br>
    <p>valor de A:</p><input type="text" name="a"> <br><br>
    <p>valor de B:</p><input type="text" name="b"> <br><br>
    <p>valor de C:</p><input type="text" name="c"> <br><br>
    <input type="submit" value="Calcular">
    </form>
</body>
</html><?php
$a = $_GET['a'];  //1
$b = $_GET['b'];  //12
$c = $_GET['c'];  //-13

if($a == 0){
    echo "Não e equação de segundo grau.";
}else{
    $delta=((($b)**2)-(4*($a)*($c)));
    if($delta < 0){
        echo " Não existe raiz.";
    }else if($delta == 0){
        $x1= (-($b)+(sqrt($delta)))/(2*($a));
        echo "Raiz única: {$x1}.";
    }else{
        $x1= (-($b)+(sqrt($delta)))/(2*($a));
        $x2= (-($b)-(sqrt($delta)))/(2*($a));
        echo "Há duas raizes reais: ";
        echo "{$x1}";
        echo " & ";
        echo "{$x2}.";
    }
}
?>