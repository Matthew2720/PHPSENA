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
        echo "<h1>Calcular el factorial de un numero ingresado</h1><br><br>";
        $Numero = readline("Ingresa un numero");
        $factorial=1;

        if($Numero<0){
            echo "<h1>¡¡Por favor ingrese un numero positivo!!</h1>";
        }else{
            for($i=1;$i<=$Numero;$i++){
                $factorial = $factorial * $i;
            }
            echo "<h1> El factorial del numero $Numero es $factorial</h1><br>";
        }
    ?>
</body>
</html>