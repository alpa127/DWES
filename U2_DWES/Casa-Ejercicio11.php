<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arrayNums = array();
    $numRandom = rand(1, 4);
    $i = 0;
    $j=2;
    foreach ($arrayNums as $valor) {
        if ($i < 10) {
            $valor[$i]= $numRandom;
            echo 'Numero: '.$valor[$i]**$j;
            $j++;
            $i++;
        }
    }
    ?>
</body>

</html>