<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocidos con derecho a quedar y tratarlos bien y mal</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="num">Nº de Opciones</label>
            <input type="number" id="num" name="numero" value="<?php echo (isset($_POST['numero']) ? $_POST['numero'] : 1); ?>" required="require">
            <br> <input type="submit" name="rellenar" value="Rellenar Opciones">
        </div>
    </form>
    <div>
        <?php
        if (isset($_POST['rellenar']) or isset($_POST['mostrar'])) {
        ?>Color Fondo:<input type="color" name="colorF" 
        value="<?php echo (isset($_POST['colorF'])?$_POST['colorF']:"");?>"/>
        <br>
        Color Texto:<input type="color" name="colorT"
        value="<?php echo (isset($_POST['colorT'])?$_POST['colorT']:"");?>">
        <br><br>
        Rellenar Opciones
        <br>
    <?php
            for ($i = 0; $i < $_POST['numero']; $i++) {
                echo '<input type="text" name="opciones[]" 
                value"'.(isset($_POST['opciones'][$i])?$_POST['opciones'][$i]:"").'
                placeholder="Opción:' . ($i + 1) . '"/>';
            }
        }
    ?>
    <input type="submit" name="mostrar" value="Mostrar Menú">
    </div>
    <div>

    </div>
    <!-- Pintar el menú -->
    <?php
    if (isset($_POST['mostrar'])) {
        if (isset($_POST['opciones'])) {
            foreach ($_POST['opciones'] as $opcion) {
                echo '<span style="background-color: ' . $_POST['colorF'] .
                    ';color: ' . $_POST['colorP'] . '; margin: 5px;>' . $opcion . '</span>';
            }
        }
    }
    ?>
</body>

</html>