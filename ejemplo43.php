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
    /*Realizar un Algoritmo el cual se permita ingresar 5 notas y calcule la nota definitiva */
    $s=0;
    echo "Algoritmo para calcular nota definitiva \n";
    for($i=1;$i<=5;$i++){
    $n=readline("Escriba una de las notas \n");
    $s=$s+$n;
    }
    $p=$s/5;
    echo "La nota definitiva es $p ";

    ?>
</body>
</html>