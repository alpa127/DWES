<?php

$persona = array("Ana", 23, 1.27);





echo '<h1>Array persona con funcion Vardump</h1>';
var_dump($persona);

echo "<p>";
echo "Elementos de persona: " . $persona[0] . ",$persona[1]" . ',' . $persona[2];
echo "</p>";


//Mostrar el array con For each
echo '<h1>Array persona con funcion ForEach</h1>';
foreach ($persona as $valor) {
    echo $valor . " ";
}

//Mostrar el array con índices
echo '<h1>Array persona con índices</h1>';
foreach ($persona as $indice => $valor) {
    echo "Ïndice: $indice Valor: $valor </br>";
}

//Crear un array vacío
$mascota = array();

//Asignar valores al array mascota
$mascota[10] = 'Tobby';
$mascota[100] = 'Perro';
$mascota[200] = 'Ana';

echo"<h1>Mostrar mascotas con vardump</h1>";
var_dump($mascota);

//Mostrar el array con índices
echo '<h1>Array persona con índices</h1>';
foreach ($mascota as $indice => $valor) {
    echo "Ïndice: $indice Valor: $valor </br>";
}

//Crear un nuevo elemento en array mascotas, sin especificar el índice
$mascota[]=5;
echo "<h1>Mostrar mascotas con vardump</h1>";
var_dump($mascota);

//Acceder a un elemento cuyo índice no existe
echo "<h1>Mostrar mascotas[0]</h1>";
echo "$mascota[0]";
?>