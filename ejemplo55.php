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
$ss=0;$acumulador=0;
for($i=1;$i<=10;$i++){
    $n = readline("Ingrese el numero al cual desea calcular su factorial \n");
    for ($z = 1; $z <= $n; $z++){
        $factorial= $z * $n;
        $acumulador = $acumulador+$factorial;
    }
    echo "El factoral es $acumulador \n";
    $ss=$ss+$acumulador;
    $acumulador = 0;
}
$promedio = $ss/10;
echo "El promedio de los factoriales es $promedio"
?>
</body>
</html>