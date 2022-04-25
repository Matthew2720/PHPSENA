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
$numero = readline("Ingresa un numero: ");
if ($numero%5==0 && $numero%3==0){
    echo "Bingbong";
}elseif($numero%5==0){
    echo "bong";
}elseif($numero%3==0){
    echo "bong";
}else{
    echo "El numero $numero No es multiplo de 5 y tampoco de 3";
}
?>
</body>
</html>