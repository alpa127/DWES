<?php

    //Incluir libreria PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once '../../../vendor/autoload.php';
    function enviarCorreo(Modelo $bd ,Reparacion $r,$detalle, Propietario $propietario){
        $resultado = false;
        try{
            $correo = new PHPMailer(true);
             //Configurar datos del servidor saliente
             $correo->isSMTP();
             $correo->Host = 'smtp.gmail.com';
             $correo->SMTPAuth = true;
             $correo->Username= 'apachonc05@educarex.es';
             $correo->Password = '';
             $correo->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
             $correo->Port= 465;
 
             //Configuración del correo que vamos a escribir
             $correo->setFrom('apachonc05@educarex.es','Alvaro');
             $correo->addAddress($propietario->getEmail(),$propietario->getNombre());
             //configuración del contenido del mensaje
             $correo->isHTML(true);
             $correo->CharSet='UTF-8';
             $correo->Subject='Factura Reparación Nº'.$r->getId();
             $texto = textoReparacion($r,$detalle,$propietario);
             $correo->Body=$texto;
             $correo->AltBody="<h1>hola mundo</h1>";
             $correo->addAttachment('../icon/info.png');
             //Enviar Correo
             if($correo->send()){
                 $resultado = true;
             }
        }catch(Exception $e){
            echo $e->getMessage();
           
        }
       

        return $resultado;
    }

    function textoReparacion($r,$detalle,Propietario $propietario){
        $texto = "<div style='font-weight:bold;'>Nombre:".$propietario->getNombre()."<br>";
        $texto .= "DNI:".$propietario->getDni()."<br></div>";
        $texto .= "<div>NºReparacion:".$r->getId()."<br>";
        $texto .= "Fecha:".date("d/m/Y",strtotime($r->getFecha()))."<br></div>";
        $texto .= "<table border='1' rules='all' width='50%'><tr><td>Concepto</td><td>Cantidad</td><td>Precio Udad</td><td>Total</td></tr>";
        foreach($detalle as $d){
            $texto .= "<tr><td>".$d['Concepto']."</td><td>".$d['Cantidad']."</td><td>".$d['Importe']."</td><td>".$d['Total']."</td></tr>";

        }
        $texto .= "<tr><td colspan='3'>Total Reparación</td><td>Cantidad</td><td>".$r->getImporteTotal()."</td></tr>";

        $texto.= "</table>";
        return $texto;
    }
?>