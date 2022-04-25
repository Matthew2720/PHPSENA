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
$Hombres = 5;
$Mujeres = 6;
$Estudiantes=$Hombres+$Mujeres;

$P_H=(($Hombres/$Estudiantes)*100);
$P_M=(($Mujeres/$Estudiantes)*100);

//Redondeo

$Redondeo_H =round($P_H, 2);
$Redondeo_M =round($P_M, 2);

print "El porcentaje de hombres del salon es de: <b> $Redondeo_H %</b><br>";
print "El porcentaje de mujeres del salon es de: <b> $Redondeo_M %</b><br><br>";

print 'La variable de $P_H es : <br>';
var_dump($P_H);
print 'La variable de $P_M es : <br>';
var_dump($P_M);


?>
</body>
</html>