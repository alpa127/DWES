<?php
    include '08F1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Mostrar una variable definida en F1.php
        echo $texto;
        //Incluir el  código de F2.php (muesrea yb r¡texto)
        require '08F2.php';

        //Se permite llamarlo +1 vez

        //Genera un warning
        include '08F1.php';
        //Genera un error
        require '08F2.php';
    ?>
</body>
</html>