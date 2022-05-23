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
    $municipios=["Barbosa", "Copacabana", "Girardota", "Bello", "Medellín",
    "Envigado", "Itagüí", "Sabaneta", "LaEstrella" ,"Caldas"];
    $habitantes=[];
    $mayor =0;
    $c=0;$c2=0;
    for($i=1;$i<=10;$i++){
        $habitantes[$c]=readline("Ingrese la cantidad de habitantes para: $municipios[$c] \n");
        if($habitantes[$c] > $habitantes[$c2])
        {
            $mayor = $c;
        };
        $c= $c+1;
        $c2=$c-1;
    }
    echo "El municipio con mayor cantidad de habitantes es $municipios[$mayor] "
    ?>
</body>
</html>