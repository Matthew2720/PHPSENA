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
    #un profesor quiere saber el porcentaje de estudiantes
    echo "Calcular porcentaje de estudiantes \n";

    $h=readline("Ingrese la cantidad de hombres en el salon \n");
    $m=readline("Ingrese la cantidad de mujeres en el salon \n");
    $t=$h+$m;
    $ph=($h*100)/$t;
    $pm=($m*100)/$t;
    echo "El porcentaje de hombres es de $ph% y de mujeres es de $pm%"


    ?>
</body>
</html>