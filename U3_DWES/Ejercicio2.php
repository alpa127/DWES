<?php
    //Comprobamos si hay que guardar o borrar la cookie
    if(isset($_POST['guardar'])){
        setcookie('colorF',$_POST['colorF'],time()+(24*60*60));
        setcookie('colorF',$_POST['colorF'],time()+(24*60*60));
        //Recargar la pagina
        header("loacation:Ejercicio2.php");
    }

    if(isset($_POST['borrar'])){
        setcookie('colorF','',time()-1);
        setcookie('colorF','',time()-1);
        header("loacation:Ejercicio2.php");
    
    }

    $colorF = "#FFFFFF";
    $colorT = "#000000";
    //Ver si estan definidos los colores en la cookie
    if(isset($_COOKIE['colorF'])){
        $colorF=$_COOKIE['colorF'];
    }
    if(isset($_COOKIE['colorT'])){
        $colorT=$_COOKIE['colorT'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $colorF;?>;
            color: <?php echo $colorT;?>;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div>
            <label>Color de fondo</label><br>
            <input type="color" name="ColorF" value="<?php echo $colorF;?>">
        </div>
        <div>
            <label>Color de texto</label><br>
            <input type="color" name="colorT" value="<?php echo $colorT;?>">
        </div>
        <div>
            <input type="submit" name="guardar" value="guardar Preferencias">
            <input type="submit" name="borrar" value="Borrar Preferencias">
        </div>
    </form>
</body>
</html>