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
 /* Conocidos los salarios basicos de tres empleados aplicarles un aumento del 10,12,15 por ciento respectivamente.Desplegar el resultado */

 //DATOS INICIALES

 $S1=1000000;
 $S2=1200000;
 $S3=170000;

 //PROCESAMIENTO

 $SF1=$S1*1.1;
 $SF2=$S2*1.12;
 $SF3=$S3*1.15;

 print "El salario final del empleado 1 es : $ <b>$SF1</b> COP <br>";
 print "El salario final del empleado 2 es : $ <b>$SF2</b> COP <br>";
 print "El salario final del empleado 3 es : $ <b>$SF3</b> COP <br>";
?>
</body>
</html>