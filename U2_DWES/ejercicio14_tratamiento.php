<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>

<body>
    <?php
    echo '<h1>TRATAMEINTO DE FORMULARIO EJERCICIO 14</h1>';
    //CHEQUEAR SI SE LLAMA CON POST
    if (isset($_POST['validar'])) {
        //CHEQUEAR QUE TODOS lOS CAMPos SE HAn RELLENADO
        if (empty($_POST['nombre']) or empty($_POST['ps']) or empty($_POST['fecha']) or empty($_POST['comentario']) or !isset($_POST['adicc'])) {
            echo '<h3 style="color:red";>Debes rellenar todos los campos</h3>';
        }
    } elseif ($_POST['enviar']) {
        //Mostrar los valores de los campos
        echo '<div>Nombre:' . $_POST['nombre'] . '</div>';
        echo '<div>Contraseña:' . $_POST['ps'] . '</div>';
        echo '<div>Sexo:' . $_POST['sexo'] . '</div>';
        //fecha con formato HTML
        $fecha = strtotime(($_POST['fecha'])); //Convertir fecha en texto a nº
        echo '<div>Fecha:' . date('dd/mm/yyyy', $fecha) . '</div>';
        echo '<div>Pais: ';
        foreach ($_POST['pais'] as $p) {
            echo $p . ' ';
        }
        echo '</div>';
        echo '<div>Nº Hijos:' . $_POST['nHijos'] . '</div>';
        echo '<div>Aficciones: ';
        foreach ($_POST['aficc'] as $a) {
            echo $a . ' ';
        }
        
        echo '</div>';
        echo '<div>Comentario:' . $_POST['informacion_xtra'] . '</div>';
        
        //Subir foto al servidor
        if(isset($_FILES['foto'])){
            echo '';
            $ficheroDestino = 'img/'.$_FILES['foto']['name'];
            if(move_uploaded_file($_FILES['foto']['tmp_name'], $ficheroDestino)){
                //Pintar imagen subida
                echo '<img src="'.$ficheroDestino.'"/>';
            }
        } else{
            '<h3 style="color:red";>No se encuentra la fotico</h3>';
        }
    } else {
        echo '<h3 style="color:red";>ERROR METODO DE LLAMADA</h3>';
    }
    ?>
</body>

</html>