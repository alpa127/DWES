<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1_Alvaro_Pachon</title>
</head>
<body>
    <h1>MORALIA CF</h1>
   <form action="" method="post">
    <div style="border: 1px solid black;padding:5px;">

    <div>
    <label for="">Nº de Jugador</label><br>
    <input type="number" name="numero"><br>
    </div>

   <div>
    <label for="">Nombre y Apellidos</label><br>
    <input type="text" name="nombre"><br>
    </div>

    <div>
    <label for="">Fecha de Nacimiento</label><br>
    <input type="date" name="fecha" value="<?php echo date('d-m-Y'); ?>"><br><br>
    </div>
    
    <div>
        <label for="categoria">Selecciona Categoria</label><br>
        <select name="categoria">
            <option>Benjamin</option>
            <option>Alevin</option>
            <option>Infantil</option>
            <option>Junior</option>
            <option>Senior</option>
        </select><br>
    </div>

    <div>
        <label for="">Tipo de Categoria</label><br>
        <input type="radio" name="tipoC" value="Masculina">Masculina
        <input type="radio" name="tipoC" value="Femenina">Femenina
        <input type="radio" name="tipoC" value="Mixta">Mixta
    </div>

    <div>
        <label for="">Selecciona la/las competiciones</label><br>
        <select name="competiciones" multiple="multiple">
            <option>Primera</option>
            <option>Segunda A</option>
            <option>Segunda B</option>
            <option>Tercera</option>
        </select><br><br>
    </div>

    <div>
        <label for="">Equipaciones y extras</label> <br>
        <input type="checkbox" name="extras[]" value="Entrenamientos" checked="checked">Entrenamientos(25,00€) <br>
        <input type="checkbox" name="extras[]" value="Partidos">Partidos(25,00€) <br>
        <input type="checkbox" name="extras[]" value="Chandal">Chandal(40,00€) <br>
        <input type="checkbox" name="extras[]" value="Bolso">Bolso(15,00€)
        <br><br>
    </div>

    <div>
           <input type="submit" name="enviar" value="Enviar">
           <input type="reset" name="limpiar" value="Limpiar">
    </div>
    <?php
        if(isset($_POST['enviar'])){
            if(empty($_POST['numero']) or empty($_POST['nombre']) or empty($_POST['fecha']) or 
           !isset($_POST['categoria']) or !isset($_POST['tipoC']) or !isset($_POST['competiciones']) or
            !isset($_POST['extras'])){
                echo '<h3 style="color:red">Error, rellena todos los campos</h3>';
            }else{

                if(isset($_POST['tipoC']) and $_POST['tipoC'] == 'Mixta' and $_POST['categoria'] != 'Alevin'){
                    echo '<h3 style="color:red">El tipo de categoria Mixta solo acepta las categorias Benjamin y Alevin</h3>';
                }else{
                    if(isset($_POST['extras'])){
                        $equip=false;
                        foreach($_POST['extras'] as $e){
                            if($e == 'Entrenamientos' or $e == 'Partidos'){
                                if(!$equip){
                                    $equip=true;
                                }else{
                                    echo '<h3 style="color:red">Al menos se debe tener seleccionada la equipacion de entrenamientos o la de partidos</h3>';
                                }
                            }
                            if ($equip == true) {
                                $precio = 0;
                                switch ($e) {
                                    case 'Entrenamientos':
                                        $precio += 25;
                                        break;
                                    case 'Partidos':
                                        $precio += 25;
                                        break;
                                    case 'Chandal':
                                        $precio += 40;
                                        break;
                                    case 'Bolso':
                                        $precio = 15;
                                        break;
                                }
                        }
                        
                    }
                }
            }
            echo '<h3 style="color:blue;">Datos Correctos.El importe a pagar es de '. $precio .'€</h3>';
        }
    }
    ?>
   

   
    </div>
   </form>
    
</body>
</html>