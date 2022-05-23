<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: green;
        color: white;
        font-size: 40px;
    }
    </style>
</head>
<body>
<?php
    $Cpar=0;
    $Cimpar=0;
    $Cpos=0;
    $Cneg=0;
    $contador=0;

    while($contador<10){
        $Numero=readline("Ingresa un numero ");

        if($Numero % 2 == 0){
            $Cpar++;
        }else{
            $Cimpar++;
        }

        if($Numero > 0){
            $Cpos++;
        }else{
            $Cneg++;
        }
        $contador++;
    }

    echo "Cantidad de numeros pares: $Cpar <br>";
    echo "Cantidad de numeros impares: $Cimpar <br>";
    echo "Cantidad de numeros positivos: $Cpos <br>";
    echo "Cantidad de numeros negativos: $Cneg <br>";

?>
</body>
</html>