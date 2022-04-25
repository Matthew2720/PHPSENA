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
$Nombre_Empleado = readline("Ingrese el nombre del empleado : ");
$SB = readline("Ingresa el salario basico");
$Ventas = readline("Ingresa el valor de las ventas del empleado");
$Bono = 100000;

if($Ventas >= 10000000 || $SB<1100000){
    echo "El empleado <b>$Nombre_Empleado</b> Tiene derecho a un apoyo de <b> $Bono </b> COP <br>";
    $SN = $SB + $BONO;
    echo "El salario basico del empleado <b> $Nombre_Empleado</b> es de : <b>$SB</b> COP <br>";
    echo "El salario neto del empleado <b> $Nombre_Empleado </b> es de : <b> $SN </b> COP <br>";
}else{
    echo "El empleado <b> $Nombre_Empleado </b> No tiene derecho a bonificacion <br>";
    $SN = $SB;
    echo "El salario basico del empleado <b> $Nombre_Empleado </b> es de : <b> $SB </b> COP <br>";
    echo "El salario neto del empleado <b> $Nombre_Empleado </b> es de : <b> $SN </b> COP <br>";
}

?>
</body>
</html>