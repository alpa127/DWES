<!--Vamos ha hacer el mismo ejercicio pero con el php dentro del html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
</head>
<body>
    <?php

    //Declaración de variables de diferentes tipos
$nombre = 'Paquito tu sabe';
$edad = 19;
$estatura = 1.91;
$esAlumno = true;
?>
<!--Mostrar el vvalor de las variables
/*echo 'Nombre: '.$nombre; //Con el . concatenamos
echo "<br/>Edad: $edad"; //Dentro de comillas dobles podemos usar las variables y se sustituyen por su valor
echo '<br/>Estatura: '.$estatura;
echo '<br/>Es alumno: '.$esAlumno;

echo '<table border="1">';
echo '<tr><th>Variable</th><th>Tipo</th></tr>';
echo '<tr><td>Nombre</td><td>'.gettype(($nombre)).'</td></tr>';
echo '<tr><td>Edad</td><td>'.gettype(($edad)).'</td></tr>';
echo '<tr><td>Estatura</td><td>'.gettype(($estatura)).'</td></tr>';
echo '<tr><td>Es Alumno</td><td>'.gettype(($esAlumno)).'</td></tr>';
echo '</table>';-->
 
<p>
    |Nombre: <?php echo $nombre;?>
</p>
<p>
    |Edad: <?php echo $edad;?>
</p>
<p>
    Estatura:<?php echo $estatura;?>
</p>
<p>
    esAlumno:<?php echo $esAlumno;?>
</p>
<table>
    <tr>
        <th>
            Variable
        </th>
        <th>Tipo</th>
    </tr>
    <tr>
        <td>
            Nombre
        </td>
        <td>
            <?php echo $nombre?>
        </td>
    </tr>

    <tr>
        <td>
            Edad
        </td>
        <td>
            <?php echo $edad?>
        </td>
    </tr>

    <tr>
        <td>
            Estatura
        </td>
        <td>
            <?php echo $estatura?>
        </td>
    </tr>

    <tr>
        <td>
            Es alumno
        </td>
        <td>
            <?php echo $esAlumno?>
        </td>
    </tr>
</table>
</body>
</html>


