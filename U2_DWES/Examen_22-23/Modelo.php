<?php
 require_once 'ClaseEstancia.php';

    class Modelo{
        private string $nombreFichero = "estancias.txt";

        function __construct()
        {
            
        }

        function crearEstancia(Estancia $e){

            $f=null;
            try{
                //Abrimos el fichero
                $f = fopen($this->nombreFichero, "a+");
                //Escribimos los datos en el fichero
                fwrite(
                    $f,
                    $e->getDni().";".$e->getNombre().";".$e->getTipoH().";"
                    .$e->getNumero().";".$e->getEstancia().";".$e->getPago().";".$e->getOpciones(). PHP_EOL
                );
                $resultado = true;

            }  catch(\Throwable $th){
                echo $th->getMessage();
            } finally{
                if($f != null){
                    fclose($f);
                }
            }
            return $resultado;
        }
        public function obtenerEstancia(){
            $resultado= array();
            if(file_exists($this->nombreFichero)){
                $datos = file($this->nombreFichero);

                foreach($datos as $linea){
                    $campos = explode(';',$linea);
                    $estancia = new Estancia($campos[0],$campos[1],$campos[2],$campos[3],$campos[4],$campos[5],$campos[6]);
                    $resultado[] = $estancia;
                }
            }
            return $resultado;
        }
    }
?>