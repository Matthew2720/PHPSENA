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
$s=0;
for($i=1;$i<=1000;$i++){
    if($i % 2 == 0){
        echo "$i es par \n";
        $s=$s+$i;
    }
}
echo "Sumatoria $s"
?>
</body>
</html>