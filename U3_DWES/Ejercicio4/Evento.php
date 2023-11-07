<?php
    class Evento{
        private string $fecha;
        private string $hora;
        private string $asunto;

        public function __construct($fecha,$hora,$asunto){
            $this->fecha=$fecha;
            $this->hora=$hora;
            $this->asunto=$asunto;
        }
        
            
        
    }
?>