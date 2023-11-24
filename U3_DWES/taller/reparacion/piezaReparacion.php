<?php 
    require_once 'Reparacion.php';
    require_once '../pieza/Pieza.php';
    class piezaReparacion{
        private Reparacion $r;
        private Pieza $p;
        private int $cantidad;
        private float $precio;

        function __construct($r,$p,$cantidad,$precio){
            $this->r=$r;
            $this->p=$p;
            $this->cantidad=$cantidad;
            $this->precio=$precio;
        }
        
    }
?>