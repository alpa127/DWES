<?php
require_once '../Modelo.php';
$bd = new Modelo();
if($bd->getConexion()==null){
    $mensaje=array(0, 'Error, no hay conexion con la BD');
}
    if(isset($_POST['login'])){
        //Chequear que vienen rellenos us y ps
        if(empty($_POST['us']) or empty($_POST['ps'])){
            $mensaje=array(0, 'Debes rellenar usuario y contraseña');
        }else{
            //Comprobar que us y ps son correctos
            $usuario= $bd->obtenerUsuario($_POST['us'],$_POST['ps']);
            if($usuario==null){
                $mensaje=array(0,'Error,usuario y contraseña incorrectos');
            }
            else{
                //Guardar el usuario en la sesión y redirigir a la página
                //que queramos que sea la de entrada ¡¡CAMBIAR!!
                session_start();
                $_SESSION['usuario']=$usuario;
                header(('location:../pieza/controllerPieza.php'));
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-md pt-5 border w-25">
    <h1>Taller Augustobriga</h1>
        <!-- Login -->
        <h1>Login</h1>
        <form action="#" method="post">     
            <label>Usuario</label><br>
            <input type="text" name="us" placeholder="Usuario" required="required"/>
            <label>Contraseña</label>
            <input type="text" name="ps" placeholder="contraseña" required="required"/>
            <input type="submit" name="login" value="Entrar" class="btn btn-light"/>
            <input type="reset" name="limpiar" value="Cancelar" class="btn btn-light">
        </form>
    </div>
    <?php
    if(isset($mensaje)){
        echo '<div class="container p-5 my-5 border">';
        if($mensaje[0]=='e')
        echo '<h3 class="text-danger">'.$mensaje[1].'</h3>';
        else
        echo '<h3 class="text-access">'.$mensaje[1].'</h3>';
        echo '</div>';
    }
    ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>