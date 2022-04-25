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
    $Mensaje = "Hola mundo soy aprendiz SENA";

    //strlen() - Devuelve la longitud de una cadena
    echo strlen($Mensaje).'<br>';//Salida N cantidad de letras

    //str_word_count() - Cuenta el numero de palabras en una cadena.
    echo str_word_count($Mensaje).'<br>';//Salidad 5

    //strrev() - invierte una cadena.
    echo strrev($Mensaje).'<br>';// Mensaje Invertido

    /* strpos()- busca un texto específico dentro de una cadena. Si se encuentra una coincidencia, la función devuelve la posición del carácter de la primera coincidencia. Si no se encuentra ninguna coincidencia, devolverá FALSO u Omite.. */
    echo strpos($Mensaje, "Soy").'<br>';//salidad 11

    //strreplace() - remplaza algunos caracteres con otros caracteres en una cadena
    echo str_replace("Aprendiz","Profesional",$Mensaje);
?>
</body>
</html>