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
// Don pepe tiene una tienda y un cliente llego a comprar 5productos: Realizar un Algoritmo que calcule el valor bruto y aplique el IVA del 16%.
echo "Algoritmo para calcular iva de los productos comprados\n";
$s=0;
$iv=0;
for($i=1;$i<=5;$i++){
$n=readline("Escriba el precio bruto del producto $i \n");
$iv=$n*1.16;
echo "El valor del producto con IVA es de $iv \n";
$s=$s+$iv;
}
echo "El precio de todos los productos con iva es de $s \n";

?>
</body>
</html>