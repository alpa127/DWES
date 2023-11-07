<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
</head>

<body>
    <h1>INFO ALUMNO (con array)</h1>
    <?php
        $alumno=array();
        $alumno['nombre']='Andrés';
        $alumno['fechaN']='29/03/2000';
        $alumno['direccion']=array('tipo de vía'=>'Calle', 'nombreVia'=>'Antonio Concha','numero'=>23);

        $alumno['curso']='2ºDAW';
        $alumno['asignaturas']=array('DWES','DWEC','DAW','DIW','EIE');
    ?>

    <table border="1">
<?php
    foreach($alumno as $clave=>$valor){
        echo'<tr>';
        echo '<td>'.$clave.'</td>';
        if (is_array($valor)){
            echo '<td>';
            echo '<table border="1">';
            foreach($valor as $c2=>$v2){
                echo'<tr>';
                    echo '<td>'.$c2.'</td>';
                    echo '<td>'.$v2.'</td>';
                echo'</tr>';
            }
            echo'</table>';
            echo '</td>';
        } else{
            echo '<td>'.$valor.'</td>';
        }
        echo '</tr>';
    }
?>

    </table>
</body>

</html>