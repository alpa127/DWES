<?php

    //Incluir libreria PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once '../../autoload.php';
    function enviarCorreo(Modelo $bd ,Reparacion $r,$detalle, Propietario $propietario){
        $resultado = false;
        try{
            $correo = new PHPMailer(true);
        }catch(Exception $e){
            echo $e->getMessage();
            //Configurar datos del servidor saliente
            $correo->isSMTP();
            $correo->Host = 'smtp.gmail.com';
            $correo->SMTPAuth = true;
            $correo->Username= 'apachonc05@educarex.es';
            $correo->Password = 'humwvvrkofdpumkd';
            $correo->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
            $correo->Port= 465;

            //Configuración del correo que vamos a escribir
            $correo->setFrom('apachonc05@educarex.es','Alvaro');
            $bd = new Modelo();
            $coche = $bd->obtenerVehiculoId($r->getCoche());
            $propietario = $bd->obtenerPropietario($coche->getPropietario());
            $correo->addAddress($propietario->getEmail(),$propietario->getNombre());
            //configuración del contenido del mensaje
            $correo->isHTML(true);
            $correo->Subject='Factura Reparación Nº'.$r->getId();
            $correo->Body="<h1>hola mundo</h1>";
            $correo->Body="<h1>hola mundo</h1>";

            if($correo->send()){
                $resultado = true;
            }
        }
       

        return $resultado;
    }
?>