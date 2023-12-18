<?php
require_once 'Producto.php';
require_once 'Tienda.php';
require_once 'Modelo.php';
session_start();
$bd = new Modelo();
$sTienda=0;
if ($bd->getConexion() == null) {
    $mensaje = array('e', 'Error, no hay conexión con la bd');
} 

if(isset($_SESSION['tienda'])){
   $sTienda=1;
}

if(isset($_SESSION['selTienda'])){
    $_SESSION['tienda'] = $bd->obtenerDatosTienda($_POST['tienda']);
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1 style='color:red;'><?php echo isset($mensaje) ? $mensaje:"" ;?></h1>
    </div>
    <form action="mcDaw.php" method="post">
        <div>
            <h1 style='color:blue;'>Tienda</h1>
            <label for="tienda">Tienda</label><br />
            <?php if($sTienda!=1){?>
            <select name="tienda">
                <?php
                $tienda = $bd->obtenerTienda();

                    foreach($tienda as $t){
                        echo '<option value="'.$t->getCodigo().'">'.$t->getNombre().'</option>';
                    }
                }
                ?>
            </select>
            <button type="submit" name="selTienda">Seleccionar tienda</button>
        
        </div>
        <div>
            <h1 style='color:blue;'>Añade productos a la cesta</h1>
            <h2 style='color:green;'>Datos Tienda: 
            <?php 
            foreach($tienda as $t){ 
            echo 'Nombre: '.$t->getNombre().'-'.$t->getTelefono();} ?>
                <button type="submit" name="cambiar">Cambiar Tienda</button>
            </h2>
            <table>
                <tr>
                    <td><label for="producto">Producto</label><br /></td>
                    <td><label for="cantidad">Cantidad</label><br /></td>
                    <td>Añadir a la cesta</td>
                </tr>
                <tr>
                    <td>
                        <select id="producto" name="producto">
                        <?php
                        $producto = $bd->obtenerProducto();
                        

                        ?>
                        </select>
                    </td>
                    <td><input id="cantidad" type="number" name="cantidad" value="1"/></td>
                    <td><button type="submit" name="agregar">+</button></td>
                </tr>
            </table>            
        </div>
        <div>
            <h1 style='color:blue;'>Contenido de la cesta</h1>
            <table  border="1"  rules="all"  width="25%">
                <tr>
                    <td><b>Producto</b></td>
                    <td><b>Cantidad</b></td>
                    <td><b>Precio</b></td>
                </tr>
                
            </table>   
            <button type="submit" name="crearPedido">Crear Pedido</button>         
        </div>
    </form>
</body>
</html>