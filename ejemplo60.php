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
    $mayor = 0; $menor = 0;
    for($i=1;$i<=20;$i++){
    $n = readline("Escriba un numero");
    if($menor > $n){
        $menor = $n;
    }
    if($mayor < $n){
        $mayor = $n;
    }
    }
    echo "El numero mayor es $mayor \n El numero menor es $menor";

?>
</body>
</html>