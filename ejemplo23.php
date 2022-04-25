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
    $Nombre = readline("Ingrese el nombre del estudiante");
    $Nota = readline("Ingrese la nota del estudiante");

    if($Nota >=3 and $Nota <= 5){
        echo "El estudiante <b> $Nombre
        </b> <b>Aprobo</b> la Asignatura";
    }else{
        echo "El estudiante <b> $Nombre
        </b> <b>Reprobo</b> la Asignatura";
    }
?>
</body>
</html>