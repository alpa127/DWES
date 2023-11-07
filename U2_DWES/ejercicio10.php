<?php

$persona = array('Nombre'=>'Ana','Edad'=> 23,'Estatura'=>1.27);

//Acceder por nombre a los elementos de un array asociativo
echo "<p>";
echo 'Nombre:'.$persona["Nombre"].'</br>Edad:'.$persona["Edad"].'</br>Estatura:'.$persona["Estatura"];
echo '</p>';

//Mostrar el array con índices
echo '<h1>Array persona con índices</h1>';
foreach ($persona as $indice => $valor) {
    echo "Índice: $indice Valor: $valor </br>";
}


//Crear un array asociativo vacío
$mascota = array();

$mascota['edad']=5;
echo'<h1>Mostrar con var dumps</h1>';
var_dump($mascota);

//Asignar valores al array mascota
$mascota['nombre'] = 'Tobby';
$mascota['Tipo'] = 'Perro';
$mascota['nombrePropietario'] = 'Ana';

//MEzclar array asociaitvo y escalar
//Crear un elemento sin especificar la clave
$mascota[]=1234;
var_dump($mascota);
?>
