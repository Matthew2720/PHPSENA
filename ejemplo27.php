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
 $N1 = readline("INGRESA EL PRIMER NUMERO");
 $N2 = readline("INGRESA EL SEGUNDO NUMERO");

 if($N1 > $N2){
     echo "$N1 es mayor que $N2";
 }else if($N1==$N2){
     echo "$N1 es igual a $N2";
 }else{
     echo "$N1 es menor que $N2";
 }
 
?>
</body>
</html>