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
$contador=0;$acumulador=0;$promedio=0;
do{
    $num = readline("Ingresa un numero positivo: ");
        if($num > 0){
            $acumulador = $acumulador + $num;
        }else{
            $num = readline("Ingresa un numero positivo");
        }
        $contador++;
}while($contador<4) ;

$promedio = $acumulador / $contador;

echo "<br><br>";
echo "Ha ingresado $contador Numeros positivos<br>";
echo "El promedio de los numeros es $promedio<br>";

?>
</body>
</html>