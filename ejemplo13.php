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
    $nombre1="Daniel";
    $nombre2="Orlando";
    $apellido1="Restrepo";
    $apellido2="Restrepo";
    $ciudad="Medellin";

    echo "Hola, yo no soy ".$nombre2." ".$apellido1."<br";

    echo "Yo soy ".$nombre2." ".$apellido2." y, vivo en ".$ciudad."<br>";

    echo "Longitud de la cadena($nombre1) : ".strlen($nombre1)."<br>";

    echo "Longitud de la cadena($apellido1) : ".strlen($apellido1)."<br>";

    echo "Longitud de la cadena($nombre2) : ".strlen($nombre2)."<br>";

    echo "Longitud de la cadena($apellido2) : ".strlen($apellido2)."<br>";

    echo "Longitud de la cadena($ciudad) : ".strlen($ciudad)."<br>";

    $texto1= $nombre1. " ".$apellido1;
    $texto2= $nombre2. " ".$apellido2;
    $texto3=$texto1." y ".$texto2;

    print "$texto3<br>";
    echo "La cantidad de palabras de la cadena ($texto3) es : ".str_word_count($texto3).'<br>';

?>
</body>
</html>