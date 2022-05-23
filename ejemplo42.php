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
        $num = readline("Ingrese el numero para la sumatoria: ");
        $sum_pares=0;
        $sum_impares=0;

        for($z=1;$z<=$num;$z++){
            if($z/2==0){
                $sum_pares=$sum_pares+$num;
            }else{
                $sum_impares=$sum_impares+$num;
            }
        }
        echo "La suma de los numeros pares de 1 a $num es: $sum_pares<br>";
        echo "La suma de los numeros impares de 1 a $num es: $sum_impares<br>";

    ?>
</body>
</html>