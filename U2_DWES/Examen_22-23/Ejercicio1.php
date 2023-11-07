<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label>DNI</label><br>
            <input type="text" name="dni" placeholder="12345678L">
        </div>
        <div>
            <label>Nombre del Cliente</label><br>
            <input type="text" name="nombre" placeholder="Nombre del Cliente">
        </div>
        <br>
        <div>
            <label>Tipo de Habitación</label><br>
            <select name="tipoH">
                <option value="Doble" selected="selected">Doble</option>
                <option value="Individual">Individual</option>
                <option value="Suite">Suite</option>
            </select>
        </div>
        <div>
            <label>Numero de noches</label><br>
            <input type="number" name="numero">
        </div>
        <div>
            <label>Estancia</label><br>
            <select name="estancia" id="">
                <option value="1">Diario</option>
                <option value="2">Fin de semana</option>
                <option value="3">Promocionado</option>
            </select>
        </div>
        <div>
            <label for="">Pago</label><br>
            <input type="radio" name="pago" value="Efectivo" />Efectivo
            <input type="radio" name="pago" value="Tarjeta" checked="checked" />Tarjeta
        </div>
        <div>
            <label for="">Opciones</label><br>
            <input type="checkbox" name="opciones[]" value="1" />Cuna
            <input type="checkbox" name="opciones[]" value="2" />Cama Supletoria
            <input type="checkbox" name="opciones[]" value="3" />Lavanderia
        </div>
        <div>
            <input type="submit" name="crear" value="Crear Estancia">
            <input type="submit" name="ver" value="Ver Estancias">
        </div>
        <?php
        //Chequeos
        if (isset($_POST['crear'])) {
            //Campos vacios
            if (empty($_POST['nombre']) or empty($_POST['dni']) or empty($_POST['numero'])) {
                echo '<h3 style="color:red;">Error: Dni,nombre y nº de noches no pueden estar vacios</h3>';
            } else {
                //Pago en efectivo y nº de noches
                if (isset($_POST['pago']) and $_POST['pago'] == 'Efectivo' and $_POST['numero'] > 2) {
                    echo '<h3 style="color:red;">Error: Pago en efectivo solamente para 2 o menos noches</h3>';
                } else {
                    //Chequeo de cuna y cama
                    //Por posicion
                    if (isset($_POST['opciones']) and isset($_POST[['opciones'][1]])) {
                        if ($_POST['opciones'][0] == 1 and $_POST['opciones'][1] == 2) {
                            echo '<h3 style="color:red;">Error: No se puede marcar cuna y cama supletoria</h3>';
                            $error=true;
                        }
                    }
                    if(!isset($error)){
                        switch($_POST['tipoH']){
                            case 'Individual':
                                $importe= $_POST['numero']*45;
                            break;
                            case 'Doble':
                                $importe= $_POST['numero']*55;
                            break;
                            case 'Suite':
                                $importe= $_POST['numero']*7;
                            break;
                        }

                        //Subo un 10% 
                        if(isset($_POST['estancia']) and $_POST['estancia']==2){
                            $importe*=1.10;
                        }
                        //Bajo un 10%
                        if(isset($_POST['estancia']) and $_POST['estancia']==3){
                            $importe*=0.90;
                        }
                        echo '<h3 style="color:blue;">Estancia Creada. El importe de la estancia es de '.$importe.'</h3>';
                    }
                    //Comprobar los valores del array sin usar funciones de array
                    /*if (isset($_POST['opciones'])) {
                        $noEncontrado = true;
                        foreach ($_POST['opciones'] as $o) {
                            if ($o == 1 or $o == 2) {
                                if ($noEncontrado) {
                                    $noEncontrado = false;
                                } else {
                                    echo '<h3 style="color:red;">Error: No se puede marcar cuna y cama supletoria</h3>';
                                }
                            }
                        }
                    }*/
                }
            }
        }

        ?>
    </form>
</body>

</html>