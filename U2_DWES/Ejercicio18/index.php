<?php
require_once 'ClaseVivienda.php';
require_once 'modelo.php';

$ad = new Modelo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserción de vivienda</h1>
    <div style="border: 1px solid black; padding: 5px;">
    <form action="" method="post">
        
        <div>
            <label for="tipoV">Selecciona el tipo de vivienda</label>
            <select name="tipoV">
                <option>Adosado</option>
                <option>Unifamiliar</option>
                <option>Piso</option>
            </select>
        </div>
        <div>
            <label for="zona">Selecciona la zona</label>
            <select name="zona">
                <option>Centro</option>
                <option>Periferia</option>
            </select>
        </div>
        <div>
            <label for="direccion">Introduce dirección:</label>
            <input type="text" name="direccion"/>
        </div>
        <div>
            <label for="nHabitaciones">Selecciona el nº de habitaciones</label>
            1<input type="radio" name="nHabitaciones" value="1">
            2<input type="radio" name="nHabitaciones" value="2">
            3<input type="radio" name="nHabitaciones" value="3">
        </div>
        <div>
            <label for="prec">Introduce precio:</label>
            <input type="text" name="precio"/>
        </div>
        <div>
            <label for="tam">Introduce tamaño:</label>
            <input type="text" name="tamanyo"/>
        </div>
        <div>
            <label for="extras">Selecciona los extras que necesites:</label>
            <input type="checkbox" name="extras[]" value="Garaje">Garaje
            <input type="checkbox" name="extras[]" value="Trastero">Trastero
            <input type="checkbox" name="extras[]" value="Piscina">Piscina
        </div>
        <div>
          <label for="observaciones">Observaciones</label>
        </div>
        <div>
            <textarea name="observaciones" cols="30" rows="10"></textarea>
        <div>
           <input type="submit" name="crear" value="Crear Vivienda">
        </div>
        
    </form>
    </div>
    <?php
    if (isset($_POST['crear'])) {
        if (
            empty($_POST['direccion'])  or empty($_POST['precio']) or empty($_POST['tamanyo'])
        ) {
            echo '<h3 style="color:red">Error, rellena todos los campos</h3>';
        } else {
            $vivienda = new Vivienda(
                $_POST['tipoV'],
                $_POST['zona'],
                $_POST['direccion'],
                $_POST['nHabitaciones'],
                $_POST['precio'],
                $_POST['tamanyo'],
                implode(',',$_POST['extras']),
                $_POST['observaciones']
            );
            if ($ad->crearVivienda($vivienda)) {
                echo '<h3 style="color:blue">Vivienda creada</h3>';
            } else {
                echo '<h3 style="color:red">Error al crear la vivienda</h3>';
            }
        }
    }
    $vivienda = $ad->obtenerViviendas();
    ?>
    <table border= 3  width="50%" align="center" style="text-align:center;border-collapse:collapse;padding: 15px;">
        <tr style="background-color: aquamarine;">
            <td><b>Tipo de vivienda</b></td>
            <td><b>Zona</b></td>
            <td><b>Dirección</b></td>
            <td><b>Nº de habitaciones</b></td>
            <td><b>Precio</b></td>
            <td><b>Tamaño</b></td>
            <td><b>Extras</b></td>
            <td><b>Observaciones</b></td>
        </tr>
        <?php
            foreach($vivienda as $v){
                echo '<tr>';
                echo '<td>'.$v->getTipoV().'</td>';
                echo '<td>'.$v->getZona().'</td>';
                echo '<td>'.$v->getDireccion().'</td>';
                echo '<td>'.$v->getNHabitaciones().'</td>';
                echo '<td>'.$v->getPrecio().'</td>';
                echo '<td>'.$v->getTamanyo().'</td>';
                echo '<td>'.$v->getExtras().'</td>';
                echo '<td>'.$v->getObservaciones().'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>