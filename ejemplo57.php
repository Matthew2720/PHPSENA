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
$contador=0;
$contador2=0;
$a = readline("Escribe un numero");
        for($p=1;$p<=$a; $p++){
            if($a % $p == 0){
                $contador= $contador++;
            };
        }
        if($contador == 2){
            $contador2++;
        }
        
echo "La cantidad de numeros primos es $contador2"
?>

</body>
</html>