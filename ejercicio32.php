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
    $nombre = readline("Ingrese su nombre");
    $edad = readline("Ingrese su edad");
    $vhextras = readline("Ingrese el valor de las horas extras");

    //salarios

    $sb_op=900000;
    $sb_aux=1200000;
    $sb_vend=1410000;
    $sb_super=3147000;
    $cargo=readline("Ingrese el cargo del empleado: operario, auxiliar, vendedor, supervisor");

    if($cargo=="operario") :
        $Salario_B=$sb_op+$vhextras;
        echo "Su salario bruto es $Salario_B <br>";
        if($Salario_B<1100000) :
            $Bono = 75000;
            $Salario_N=$Salario_B + $Bono;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br> en el esta incluido el bono de $75000 <br>";
        else:
            $Salario_N = $Salario_B;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br>";
        endif;
    elseif($cargo=="auxiliar") :
        $Salario_B=$sb_aux+$vhextras;
        echo "Su salario bruto es $Salario_B <br>";
        if($Salario_B=1100000) :
            $Bono = 95000;
            $Salario_N=$Salario_B + $Bono;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br> en el esta incluido el bono de $95000 <br>";
        else:
            $Salario_N = $Salario_B;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br>";
        endif;
    elseif($cargo=="vendedor") :
        $Salario_B=$sb_vend+$vhextras;
        echo "Su salario bruto es $Salario_B <br>";
        if($Salario_B<1540000) :
            $Bono = 105000;
            $Salario_N=$Salario_B + $Bono;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br> en el esta incluido el bono de $105000 <br>";
        else:
            $Salario_N = $Salario_B;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br>";
        endif;
    elseif($cargo=="supervisor") :
        $Salario_B=$sb_super+$vhextras;
        echo "Su salario bruto es $Salario_B <br>";
        if($Salario_B=3300000) :
            $Bono = 115000;
            $Salario_N=$Salario_B + $Bono;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br> en el esta incluido el bono de $115000 <br>";
        else:
            $Salario_N = $Salario_B;
            echo "Su nombre es $nombre <br>";
            echo "Su cargo es $cargo <br>";
            echo "Su salario neto es $Salario_N<br>";
        endif;
    endif;


?>
</body>
</html>