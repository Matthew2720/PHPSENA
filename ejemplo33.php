<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a PHP</title>
</head>
<body>

<?php 
$N = readline("Ingresa numero de caso: ");
$a=50;
$b=6;
switch ($N){ 
    case 0:
        echo " Usted ha seleccionado el caso <b>SUMA<b>: <br><br>";
        $suma=($a+$b);
        echo "La Suma de los numeros es : <b>$suma</b> <br>";
        break; 

    case 1:
        echo " Usted ha seleccionado el caso <b>RESTA</b>: <bi.><br>";
        $resta=($a-$b);
        echo "La Resta de los numeros es : <b>$resta</b> <br>"; 
        break; 

    case 2: 
        echo " Usted ha seleccionado el caso <b>MULTIPLICACION</b> <br><br>";
        $multiplicacion=($a*$b);
        echo 'La Multiplicacion de los numeros es : <b>Smultiplicacion</b> <br><br';
        break;
        
    case 3:
        echo " Usted ha seleccionado el caso <b>DIVISION</b> <br><br>";
        $division=($a/$b);
        echo "La Division de los numeros es : <b>$division</b> <br>";
        break;
        
    case 4:
        echo " Usted ha seleccionado el caso <b>POTENCIACION</b> <br><br>";
        $potenciacion=($a**$b);
        echo "La potenciacion de los numeros es : <b>$potenciacion</b><br>";
        break;

    case 5:
        echo " Usted ha seleccionado el caso <b>MODULO</b> <br><br>";
        $modulo=($a%$b);
        echo "El modulo (Residuo) de los numeros es : <b>$modulo</b><br>";
        break; 
    default: 
    echo "La opcion de caso No Existe!!";
}
?> 
</body>
</html> 
