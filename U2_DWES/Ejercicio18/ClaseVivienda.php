<?php


    class Vivienda
    {
        private String $tipoV;
        private string $zona;
        private string $direccion;
        private int $nHabitaciones;
        private int $precio;
        private int $tamanyo;
        private string $extras;
        private string $observaciones;

        public function __construct($tipoV,$zona,$direccion,$nHabitaciones,$precio,$tamanyo,$extras,$observaciones)
        {
            $this->tipoV=$tipoV;
            $this->zona=$zona;
            $this->direccion=$direccion;
            $this->nHabitaciones=$nHabitaciones;
            $this->precio=$precio;
            $this->tamanyo=$tamanyo;
            $this->extras=$extras;
            $this->observaciones=$observaciones;
        }
        
        /*Esto es en caso de poner values a las opciones del selected*/
         public function obtenerTipoVivienda()
        {
            switch ($this->tipoV) {
                case '1':
                    return 'Adosado';
                case '2':
                    return 'Unifamiliar';
                case '3':
                    return 'Piso';
            }
        }
         /*Esto es en caso de poner values a las opciones del selected*/
        public function obtenerZona()
        {
            switch ($this->tipoV) {
                case '1':
                    return 'Centro';
                case '2':
                    return 'Periferia';
            }
        }
    /*Aqui comprueba los values de los inputs de los checkbox*/
        public function obtenerExtras(){
            // switch ($this->extras){
            //     case '1':
            //         return 'Garaje';
            //     case '2':
            //         return 'Trastero';
            //     case '3':
            //         return 'Piscina';
            // }
        }

            /**
             * Get the value of tipoV
             */ 
            public function getTipoV()
            {
                        return $this->tipoV;
            }

            /**
             * Set the value of tipoV
             *
             * @return  self
             */ 
            public function setTipoV($tipoV)
            {
                        $this->tipoV = $tipoV;

                        return $this;
            }

            /**
             * Get the value of zona
             */ 
            public function getZona()
            {
                        return $this->zona;
            }

            /**
             * Set the value of zona
             *
             * @return  self
             */ 
            public function setZona($zona)
            {
                        $this->zona = $zona;

                        return $this;
            }

            /**
             * Get the value of direccion
             */ 
            public function getDireccion()
            {
                        return $this->direccion;
            }

            /**
             * Set the value of direccion
             *
             * @return  self
             */ 
            public function setDireccion($direccion)
            {
                        $this->direccion = $direccion;

                        return $this;
            }

            /**
             * Get the value of nHabitaciones
             */ 
            public function getNHabitaciones()
            {
                        return $this->nHabitaciones;
            }

            /**
             * Set the value of nHabitaciones
             *
             * @return  self
             */ 
            public function setNHabitaciones($nHabitaciones)
            {
                        $this->nHabitaciones = $nHabitaciones;

                        return $this;
            }

            /**
             * Get the value of precio
             */ 
            public function getPrecio()
            {
                        return $this->precio;
            }

            /**
             * Set the value of precio
             *
             * @return  self
             */ 
            public function setPrecio($precio)
            {
                        $this->precio = $precio;

                        return $this;
            }

            /**
             * Get the value of tamanyo
             */ 
            public function getTamanyo()
            {
                        return $this->tamanyo;
            }

            /**
             * Set the value of tamanyo
             *
             * @return  self
             */ 
            public function setTamanyo($tamanyo)
            {
                        $this->tamanyo = $tamanyo;

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

            /**
             * Get the value of observaciones
             */ 
            public function getObservaciones()
            {
                        return $this->observaciones;
            }

            /**
             * Set the value of observaciones
             *
             * @return  self
             */ 
            public function setObservaciones($observaciones)
            {
                        $this->observaciones = $observaciones;

                        return $this;
            }
    }
