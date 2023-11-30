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
            $correo->isSMTP();
            $correo->Host = 'smtp.gmail.com';
            $correo->SMTPAuth = true;
            $correo->Username= 'apachonc05@educarex.es';
        }
       

        return $resultado;
    }
?>