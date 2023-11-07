<?php
    require_once 'ClaseVivienda.php';

    class Modelo{
        private string $nombreFichero = "viviendas.txt";

        function __construct()
        {
        }

        function crearVivienda(Vivienda $v){

            $f = null;
            try {
                //Abrimos el fichero
                $f = fopen($this->nombreFichero, "a+");
                //Escribimos los datos en el fichero
                fwrite(
                    $f,
                    $v->getTipoV().";".$v->getZona().";".$v->getDireccion().";".$v->getNHabitaciones()
                    .";".$v->getPrecio().";".$v->getTamanyo().";".$v->getExtras().";".$v->getObservaciones(). PHP_EOL
                );
                $resultado = true;

            } catch(\Throwable $th){
                echo $th->getMessage();
            } finally{
                if($f != null){
                    fclose($f);
                }
            }
            return $resultado;
        }
        public function obtenerViviendas()
        {
            $resultado = array();
            if(file_exists($this->nombreFichero)){
                $datos = file($this->nombreFichero);

                foreach($datos as $linea){
                    $campos = explode(';', $linea);
                    $vivienda = new Vivienda($campos[0],$campos[1],$campos[2],$campos[3],$campos[4],$campos[5],
                    $campos[6],$campos[7]);
                    $resultado[] = $vivienda; 
                }
            }
            return $resultado;
        }
    }
?>