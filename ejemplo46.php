<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   #Desarrollar un algoritmo que permitaingresar6 números y muestre como resultado el promedio de estos.
    echo "Algoritmo PROMEDIO \n";
    $s=0;
    $n=0;
    for($i=1;$i<=6;$i++){
        $n=readline("Ingrese un numero \n");
        $s=$s+$n;
    }
    $p=$s/6;
    echo "El promedio de los 6 numeros ingresados es $p";
?>
</body>
</html>