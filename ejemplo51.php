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
    #Realizar un algoritmo que permita ingresa runa calificación del 1 al 10 y muestre en pantalla si la calificación es de 7 o superior mostrar “APROBADO” y si no obtuvo esa calificación mostrar “REPROBADO”.
    $e=readline("Ingrese la nota\n");

    if($e>=7){
        echo "APROBADO";
    }else{
        echo "REPROBADO";
    }
    ?>
</body>
</html>