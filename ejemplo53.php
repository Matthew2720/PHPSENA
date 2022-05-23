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
    #Leer 2 números, Mostra run mensaje si la suma de los números es par o es impar
    $n1 = readline("Escribe un numero \n");
    $n2 = readline("Escribe otro numero \n");
    $s=$n1+$n2;
    if($s % 2 == 0){
        echo "El numero es par";
    }else{
        echo "El numero es impar";
    }
    ?>
</body>
</html>