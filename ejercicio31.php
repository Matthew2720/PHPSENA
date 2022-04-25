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
    $Nombre = readline("Ingresa tu nombre: ");
    $Peso=readline("Ingresa tu peso en KG");
    $Altura=readline("Ingresa tu altura en metros : ");
    $BMI=$Peso/($Altura**2);

    if($BMI <18.5){
        echo("Hola $Nombre su BMI es: $BMI <br>");
        echo "Esta bajo de peso";
    }

?>
</body>
</html>