<?php
    function precio_conIva_1(){
        global $precio;

        return $precio*1.21;

    }
?>
<h1>FUNCION VARIABLE GLOBAL</h1>

<?php
$precio=10;
$precio_iva = precio_conIva_1();
echo "El precio con IVA es: $precio_iva";

?>
<h1>Funciones com parámetros con valor o por referencia</h1>
<?php
    function precio_conIva_2($importe){
        $importe = $importe*1.21;
        echo "<p>Valor de importe dentro de la función: $importe</p>";
    }
        $imp1=10;
        precio_conIva_2($imp1);
        echo "<p>Valor de importe fuera de la función: $imp1</p>";
?>
<h1>Funciones com parámetros por referencia</h1>
<?php
    function precio_conIva_3(&$importe){
        $importe = $importe*1.21;
        echo "<p>Valor de importe dentro de la función: $importe</p>";
    }
        $imp2=10;
        precio_conIva_3($imp2);
        echo "<p>Valor de importe fuera de la función: $imp2</p>";
?>