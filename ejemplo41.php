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
        $n = readline("Ingresa la cantidad: ");

        for($i=1;$i<=$n;$i++){
            $x = 1;
            $contador=0;

            while($x<=$i){
                if($i % $x==0){
                    $contador++;
                }
                $x++;
            }
        if($contador==2){
            echo "El numero $i es primo.<br>";
            }
        }
    ?>
</body>
</html>