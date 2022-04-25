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
$a = readline("Ingresa el primer numero: ");
$b = readline("Ingresa el primer numero: ");
$c = readline("Ingresa el primer numero: ");

if($a==8 && $b==3){
    echo "$a es igual a 8 y $b es igual a 3 <br>";
}else{
    echo "Alguna condicion no cumplio la validacion";
}

if($a==8 and $b==3){
    echo "$a es igual a 8 y $b es igual a 3 <br>";
}else{
    echo "Alguna condicion no cumplio la validacion";
}

if($a==8 || $b==3){
    echo "$a es igual a 8 o $b es igual a 5 <br>";
}else{
    echo "Ninguna condicion cumplio la funcion";
}

if($a==8 or $b==3){
    echo "$a es igual a 8 o $b es igual a 5 <br>";
}else{
    echo "Ninguna condicion cumplio la funcion";
}

if ($a != 4){
    echo "$a no es igual a 4<br>";
}else{
    echo "La condicion no se cumplio";
}


?>
</body>
</html>