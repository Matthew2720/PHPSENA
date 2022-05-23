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
#Realizar un Algoritmo en donde se pide la edad del usuario; si es mayor de edad debe aparecer un mensaje indicándolo

$e=readline("Ingrese su edad en años\n");

if($e>=18){
    echo "Usted es mayor de edad";
}else{
    echo "Usted es menor de edad";
}

?>
</body>
</html>