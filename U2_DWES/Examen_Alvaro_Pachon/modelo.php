<?php
    require_once 'ClaseJugador.php';

    class Modelo{
        private string $nombreFichero = "jugadores.txt";

        function __construct()
        {
        }

        function crearJugadores(Jugador $j){

            $f = null;

            try {
                //Abrimos el fichero
                $f = fopen($this->nombreFichero, "a+");
                //Escribimos los datos en el fichero
                fwrite(
                    $f,
                    $j->getNumero().";".$j->getNombre().";".$j->getFecha().";".$j->getCategoria()
                    .";".$j->getTipoC().";".$j->getCompeticiones().";".$j->getExtras(). PHP_EOL
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
        public function obtenerJugadores()
        {
            $resultado = array();
            if(file_exists($this->nombreFichero)){
                $datos = file($this->nombreFichero);

                foreach($datos as $linea){
                    $campos = explode(';', $linea);
                    $jugador = new Jugador($campos[0],$campos[1],$campos[2],$campos[3],$campos[4],$campos[5],
                    $campos[6]);
                    $resultado[] = $jugador; 
                }
            }
            return $resultado;
        }
    }