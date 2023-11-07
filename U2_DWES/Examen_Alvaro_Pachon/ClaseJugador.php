<?php

    class Jugador{
        private int $numero;
        private string $nombre;
        private string $fecha;
        private string $categoria;
        private string $tipoC;
        private string $competiciones;
        private string $extras;

        public function __construct($numero,$nombre,$fecha,$categoria,$tipoC,$competiciones,$extras){

            $this->numero=$numero;
            $this->nombre=$nombre;
            $this->fecha=$fecha;
            $this->categoria=$categoria;
            $this->tipoC=$tipoC;
            $this->competiciones=$competiciones;
            $this->extras=$extras;
        }
    

            /**
             * Get the value of numero
             */ 
            public function getNumero()
            {
                        return $this->numero;
            }

            /**
             * Set the value of numero
             *
             * @return  self
             */ 
            public function setNumero($numero)
            {
                        $this->numero = $numero;

                        return $this;
            }

            /**
             * Get the value of nombre
             */ 
            public function getNombre()
            {
                        return $this->nombre;
            }

            /**
             * Set the value of nombre
             *
             * @return  self
             */ 
            public function setNombre($nombre)
            {
                        $this->nombre = $nombre;

                        return $this;
            }

            /**
             * Get the value of fecha
             */ 
            public function getFecha()
            {
                        return $this->fecha;
            }

            /**
             * Set the value of fecha
             *
             * @return  self
             */ 
            public function setFecha($fecha)
            {
                        $this->fecha = $fecha;

                        return $this;
            }

            /**
             * Get the value of categoria
             */ 
            public function getCategoria()
            {
                        return $this->categoria;
            }

            /**
             * Set the value of categoria
             *
             * @return  self
             */ 
            public function setCategoria($categoria)
            {
                        $this->categoria = $categoria;

                        return $this;
            }

            /**
             * Get the value of tipoC
             */ 
            public function getTipoC()
            {
                        return $this->tipoC;
            }

            /**
             * Set the value of tipoC
             *
             * @return  self
             */ 
            public function setTipoC($tipoC)
            {
                        $this->tipoC = $tipoC;

                        return $this;
            }

            /**
             * Get the value of competiciones
             */ 
            public function getCompeticiones()
            {
                        return $this->competiciones;
            }

            /**
             * Set the value of competiciones
             *
             * @return  self
             */ 
            public function setCompeticiones($competiciones)
            {
                        $this->competiciones = $competiciones;

                        return $this;
            }

            /**
             * Get the value of extras
             */ 
            public function getExtras()
            {
                        return $this->extras;
            }

            /**
             * Set the value of extras
             *
             * @return  self
             */ 
            public function setExtras($extras)
            {
                        $this->extras = $extras;

                        return $this;
            }
    }