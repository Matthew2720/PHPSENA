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
    $Numero = readline("Ingrese un numero");
    $contador=0;

    while ($Numero > 0 && $Numero < 50) {
        $contador++;
        echo "Has introducido : <strong>$contador</strong> numeros positivos<br>";
        $Numero++;
    }
    ?>
</body>
</html>