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
    #Realizar un algoritmo que calcule el promedio de las edades y el promedio delas notas de los 35 estudiantes de un grupo de programación de software, además se debe mostrarla cantidad es estudiantes de genero masculino y de género femenino
    $n=0;$e=0;$g=0;$ch=0;$cm=0;$pe=0;$pn=0;
    for($i=0;$i<=35;$i++){
        $e=readline("Ingrese la edad del alumno \n");
        $pe=$pe+$e;
        $n=readline("Ingrese la nota del alumno\n");
        $pn=$pn+$n;
        $g=readline("Ingrese el genero del alumno con la numeracion \n 1 - para Masculino\n2 - para Femenino\n");
        switch ($g){
            case 1 :
                $ch = $ch+1;
                break;
            case 2 :
                $cm = $cm+1;
                break;
            case ($g != 1 and $g != 2):
                $i = $i--;
                return;
        }
    }
    $promed = $pe/35;
    $promnot= $pn/35;
    echo "El promedio de edades de los alumnos es $promed \n";
    echo "El promedio de notas de los alumnos es $promnot \n";
    echo "La cantidad de hombres es $ch y la cantidad de mujeres es $cm"


    ?>
</body>
</html>