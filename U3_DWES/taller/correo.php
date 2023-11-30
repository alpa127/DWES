<?php

    //Incluir libreria PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    function enviarCorreo($r,$detalle){
        $resultado = false;
        try{
            $correo = new PHPMailer(true);
        }catch(Exception $e){
            echo $e->getMessage();
            //Configurar datos del servidor saliente
            
        }
       

        return $resultado;
    }
?>