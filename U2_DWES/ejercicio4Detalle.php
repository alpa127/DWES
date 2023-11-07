<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php
        $nombre=$_GET['nombre'];
        $edad=$_GET['Edad'];

        echo '<h1>El nombre es: '.$nombre.' y su edad es: '.$edad.'</h1>';
    ?>
</body>
</html>