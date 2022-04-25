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
    /* pedir un numero al usuario y mostrar el resultado de multiplicarlo por 100 solo en el caso que sea mayor de 500 */
    $num = readlin("Ingresa un numero:  <br>");

    if($num >=500){
        $num = $num * 100;
    }

    print "El numero es: ".$num;
?>
</body>
</html>