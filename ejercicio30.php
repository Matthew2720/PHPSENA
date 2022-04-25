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
/* funcion date() = Dar formato a la fecha/hora local*/
$Hora = date("G");
echo "Segun el servidor la fecha y hora actual es: ".date("Y-m-d (H:1:s)");
echo"<br>";

if($Hora <8){
    echo "Es hora de tomar un buen cafe colombiano";
}
elseif($Hora > 8 and $Hora < 10){
    echo "Es hora de desayunar";
}
elseif($Hora > 10 and $Hora < 13){
    echo "Es hora de comer una fruta y otro cafecito";
}
elseif($Hora > 13 and $Hora < 15){
    echo "Es hora de almorzar verduras y carne blanda";
}
elseif($Hora > 15 and $Hora < 17){
    echo "Es hora de tomar cafe y una copa de vino";
}
elseif($Hora > 17 and $Hora < 20){
    echo "Es hora de comer una buena fruta";
}
elseif($Hora > 20 and $Hora < 22){
    echo "Es hora de una cena libre de grasas";
}else{
    echo "Ten una excelente noche";
}


?>
</body>
</html>