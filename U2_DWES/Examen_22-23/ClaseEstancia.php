<?php 

    class Estancia{

        private String $dni;
        private String $nombre;
        private String $tipoH;
        private int $numero;
        private String $estancia;
        private $pago=false;
        private $opciones=false;

        public function __construct($dni,$nombre,$tipoH,$numero,$estancia,$pago,$opciones){
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->tipoH=$tipoH;
            $this->numero=$numero;
            $this->estancia=$estancia;
            $this->pago=$pago;
            $this->opciones=$opciones;
        }
        

            /**
             * Get the value of dni
             */ 
            public function getDni()
            {
                        return $this->dni;
            }

            /**
             * Set the value of dni
             *
             * @return  self
             */ 
            public function setDni($dni)
            {
                        $this->dni = $dni;

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
             * Get the value of tipoH
             */ 
            public function getTipoH()
            {
                        return $this->tipoH;
            }

            /**
             * Set the value of tipoH
             *
             * @return  self
             */ 
            public function setTipoH($tipoH)
            {
                        $this->tipoH = $tipoH;

                        return $this;
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
             * Get the value of estancia
             */ 
            public function getEstancia()
            {
                        return $this->estancia;
            }

            /**
             * Set the value of estancia
             *
             * @return  self
             */ 
            public function setEstancia($estancia)
            {
                        $this->estancia = $estancia;

                        return $this;
            }

         

            /**
             * Get the value of pago
             */ 
            public function getPago()
            {
                        return $this->pago;
            }

            /**
             * Set the value of pago
             *
             * @return  self
             */ 
            public function setPago($pago)
            {
                        $this->pago = $pago;

                        return $this;
            }

            /**
             * Get the value of opciones
             */ 
            public function getOpciones()
            {
                        return $this->opciones;
            }

            /**
             * Set the value of opciones
             *
             * @return  self
             */ 
            public function setOpciones($opciones)
            {
                        $this->opciones = $opciones;

                        return $this;
            }
    }

?>