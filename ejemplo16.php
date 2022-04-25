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
    $a=5;$b=5;$b2="5";$c=9;$d=2;

//Igual ==
    var_dump($a==$b);echo"<br>";
    var_dump($a==$b2);echo"<br><br>";

//Identico ===
    var_dump($a===$b);echo"<br>";
    var_dump($a===$b2);echo"<br><br>";

// != Diferente
var_dump($a!=$b);echo"<br>";
var_dump($a!=$b2);echo"<br><br>";

// !== Diferente
var_dump($a!==$b);echo"<br>";
var_dump($a!==$b2);echo"<br><br>";

// < Menor que
var_dump($a<$b);echo"<br>";
var_dump($c<$b);echo"<br>";
var_dump($d<$b);echo"<br><br>";

// > Mayor que
var_dump($a>$b);echo"<br>";
var_dump($c>$b);echo"<br>";
var_dump($d>$b);echo"<br><br>";

// < Menor o igual
var_dump($a<=$b);echo"<br>";
var_dump($c<=$b);echo"<br>";
var_dump($d<=$b);echo"<br><br>";

// > Mayor o igual
var_dump($a>=$b);echo"<br>";
var_dump($c>=$b);echo"<br>";
var_dump($d>=$b);echo"<br><br>";


?>
</body>
</html>