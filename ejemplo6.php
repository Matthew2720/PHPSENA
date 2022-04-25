<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF*8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Aplicando operadores aritmeticos en PHP

    $a=5;
    $b=6;
    $c=2;
    $d=3;

    $suma=($a+$b+$c+$d);
    $resta=($a-$b-$c-$d);
    $producto=($a*$b*$c*$d);
    $media=($a+$b+$c+$d)/4;
    $potenciacion=($a**$b);
    $modulo=($b%$a);

    echo "La suma de los numeros es : <b>$suma</b><br>";
    echo "La resta de los numeros es : <b>$resta</b><br>";
    print "El producto de los numeros es : <b>$producto</b><br>";
    print "La media aritmetica de los numeros es : <b>$media</b><br>";
    print "La potenciacion de los numeros es : <b>$potenciacion</b><br>";
    print "El resultado de la operacion modulo es : <b>$modulo</b><br>";
    
?>
</body>
</html>