<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       do{
        $num1=rand(0,100);
        echo 'El numero generado es: '.$num1;
       } while($num1>50);
    ?>
</body>
</html>