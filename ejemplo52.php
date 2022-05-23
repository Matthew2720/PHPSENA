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
#Crear un algoritmo que lea la edad de 3 personas y muestre en pantalla la edad mayor
$e=0;
$s=0;
for($i=1;$i<=3;$i++){
$e=readline("Ingrese una edad en años \n");
if($e > $s){
    $s=$e;
}}

echo "La edad mayor es $s"
?>
</body>
</html>