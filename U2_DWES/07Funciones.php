<?php
    //Mostrar fecha actual con formato
    echo '<p>Hoy es:'.date('d/m/Y/ H:i').' </p>';
    //Mostrar fecha actual con formato usando funcion time que devuelve el instante actual
    echo '<p>Hoy es:'.date('d/m/Y/ H:i', time()).' </p>';
    //Mostrar el nº segundos desde el 01/01/1970 hasta ahora
    echo time();
    //Convertir una fecha a nº y mostrarlo
    echo '<p>Ayer fue:'.date('d/m/Y/ H:i',strtotime('2023-09-21')).' </p>';
   // SUma 1 día (representado en segundos 24*60*60) al momento actual time()
    echo "<p>Mañana es: ".date('d/m/Y H:i',time()+(24*60*60))."</p>";

?>