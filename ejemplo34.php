<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{color:rgb(0,102,0)}

        h2{color:rgb(102,204,255)}

        h3{color:rgb(153,0,51)}
    </style>    
</head>
<body>
    <?php
        $Nombre= readline("Ingrese el nombre del estudiante");
        $Nota= readline("Ingrese la nota del estudiante");

    switch ($Nota){
        case($Nota > 4.5):
            echo "<h1>$Nombre tienes una nota EXCELENTE!!</h1>";
            break;
        case($Nota > 4):
            echo "<h1>$Nombre tienes una nota SOBRESALIENTE!!</h1>";
            break;
        case($Nota > 3.5):
            echo "<h1>$Nombre tienes una calificacion NOTABLE!!</h1>";
            break;
        case($Nota >= 3):
            echo "<h1>$Nombre tienes un concepto de:  APROBO!!</h1>";
            break;
        case(($Nota >=2) && ($Nota < 3)):
            echo "<h1>$Nombre tienes un concepto de: REPROBO!!</hr>";
            break;
        case(($Nota >=1) && ($Nota < 2)):
            echo "<h1>$Nombre Tu nota es insuficiente!!</hr>";
            break;
        case(($Nota >=0) && ($Nota < 1)):
            echo "<h1>$Nombre Tu nota es Deficiente!!</hr>";
            break;
        default:
            echo "Por favor ingresa una nota valida";
    }
    ?>
</body>
</html>