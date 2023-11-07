<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    /**Crear, rellenar y mostrar dos arrays, uno escalar y otro asociativo, tal y como
    se muestran en la siguiente imagen. Para mostrar el número de elementos de
    un array usa la función sizeof($array). */


    <?php
        echo '<h1>Ejercicio 10 de Arrays </h1>';
        $coches= array();
        $coches[0]='Cougar';
        $coches[1]='Ford';
        $coches[3]=2500;
        $coches[4]='V6';
        $coches[5]='182';
        echo '<table>';
        echo '<tr>';
        foreach($coches as $valor=>$indice){
            
                echo '<td>';
                    echo 'Índice=>'.$indice;
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td>';
                    echo 'Coche=>'.$coches;
                echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>