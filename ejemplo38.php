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
        echo "Los datos de los estudiantes elegidos son: ";
        for($i=1;$i<=10;$i++){
            echo "<br>";
            $Nombre = readline("Ingrese el nombre del estudiante");
            $Edad= readline("Ingresa tu edad");
            echo "El nombre del estudiante numero $i es: $Nombre<br>";
            echo "La edad del estudiante numero $i es: $Edad <br>";
        }
    ?>
</body>
</html>