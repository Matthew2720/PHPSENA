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
    $n1 = readline("Ingresa el numero dividendo");
    $n2 = readline("Ingresa el numero divisor");

    if($n1%$n2==0){
        echo "El numero $n2 es divisor exacto del $n1";
    }else{
        echo "El resto de dividir el $n1 por el $n2 es: ".$n1;
    }
    ?>
    
</body>
</html>