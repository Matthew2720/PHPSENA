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
$n = 0;
echo "Las potencias de 4 hasta el 30 son: \n";
for($i=1; $i<=30;$i++){
    $n = 4**$i;
    echo "La potencia elevado a la $i es $n\n";
}

?>
</body>
</html>