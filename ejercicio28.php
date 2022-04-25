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
    $Edad1 = readline("Ingrese la edad 1 : <br>");
    $Nombre1 = readline("Ingresa el nombre 1: <br>");

    $Edad2 = readline("Ingrese la edad 2 : <br>");
    $Nombre2 = readline("Ingresa el nombre 2: <br>");

    $Edad3 = readline("Ingrese la edad 3 : <br>");
    $Nombre3 = readline("Ingresa el nombre 3: <br>");

    #Evaluemos el mayor

    if(($Edad1 > $Edad2)and($Edad1 > $Edad3)){
       echo "$Nombre1 es el mayor con $Edad1 años <br>"; 
    }elseif(($Edad2 > $Edad1)and($Edad2 > $Edad3)){
        echo "$Nombre2 es el mayor con $Edad2 años <br>";
    }elseif(($Edad3 > $Edad1)and($Edad3 > $Edad2)){
        echo "$Nombre3 es el mayor con $Edad3 años <br>";
    }elseif(($Edad1 ==$Edad2)&&($Edad2 > $Edad3)){
        echo "$Nombre1 y $Nombre2 son los mayores con $Edad1 años <br>";
    }elseif(($Edad1 ==$Edad3)&&($Edad1 > $Edad2)){
        echo "$Nombre1 y $Nombre3 son los mayores con $Edad1 años <br>";
    }elseif(($Edad1 < $Edad2)and($Edad2 == $Edad3)){
        echo "$Nombre2 y $Nombre3 son los mayores con $Edad2 años <br>";
    }else{
        echo "$Nombre1 $Nombre2 y $Nombre3 Tienen la misma edad";
    }

    #Evaluamos el Menor
    if(($Edad1 < $Edad2)&&($Edad1 < $Edad3)){
        echo "$Nombre1 es el menor con $Edad1 años <br>";
    }elseif(($Edad2 < $Edad1)and($Edad2 < $Edad3)){
        echo "$Nombre2 es el menor con $Edad2 años <br>";
    }elseif(($Edad3 < $Edad1)&&($Edad3 < $Edad2)){
        echo "$Nombre3 es el menor con $Edad3 años <br>";
    }
?>
</body>
</html>