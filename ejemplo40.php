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
        $n = readline("Ingrese la cantidad de estudiantes");
        $a_notas = 0;
        $a_estu=0;
        $c_hom=0;
        $c_muj=0;
        $prom_notas=0;
        $prom_edad=0;

        for($i=1;$i<=$n;$i++){
            $Genero = readline("Ingresa el genero del estudiante Hombre(1) o Mujer(2)<br>");
            if($Genero < 1 or $Genero >2){
                echo "Por favor ingresa un dato valido Hombre(1) o Mujer (2)";
                return;
            }
            $Edad = readline("Ingresa la edad del estudiante<br>");
            $Nota = readline("Ingresa la nota del estudiante<br>");

            if($Genero == 1){$c_hom++;}
            if($Genero == 2){$c_muj++;}
            $a_notas= $a_notas+$Nota;
            $a_estu=$a_estu+$Edad;
        }
        $prom_notas = $a_notas/$n;
        $prom_edad=$a_estu/$n;

        echo "El promedio de las notas de los estudiantes es $prom_notas<br>";
        echo "El promedio de las edades de los estudiantes es $prom_edad<br>";
        echo "En el salon hay $c_hom Hombres y $c_muj Mujeres<br>";
    ?>
</body>
</html>