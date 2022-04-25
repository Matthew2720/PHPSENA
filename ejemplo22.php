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
    $NUM = readline("Ingresa un numero: ");
    $PAR = "PAR";
    $IMPAR="IMPAR";

    if($NUM % 2 == 0){
        echo "El numero <b>$NUM</b> es un numero <b>$PAR</b>";
    }else{
        echo "El numero <b>$NUM</b> es un numero <b>$IMPAR</b>";
    }
?>
</body>
</html>