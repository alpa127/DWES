<?php
class Alumno
{
    private int $numExp;
    private string $nombre;
    private int $fechaN;

    function __construct($numExp, $nombre, $fechaN)
    {
        $this->numExp = $numExp;
        $this->nombre = $nombre;
        $this->fechaN = $fechaN;
    }

    function mostrar()
    {
        echo 'Alumno: ' . $this->numExp . ' fecha de Nacimiento: ' . date('d/m/Y', $this->fechaN) . 'Nombre: ' . $this->nombre;
    }

    function __destruct()
    {
        echo '<br/>Alumno: ' . $this->nombre . ' dado de baja';
    }


    /**
     * Get the value of numExp
     */ 
    public function getNumExp()
    {
        return $this->numExp;
    }

    /**
     * Set the value of numExp
     *
     * @return  self
     */ 
    public function setNumExp($numExp)
    {
        $this->numExp = $numExp;

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
     * Get the value of fechaN
     */ 
    public function getFechaN()
    {
        return $this->fechaN;
    }

    /**
     * Set the value of fechaN
     *
     * @return  self
     */ 
    public function setFechaN($fechaN)
    {
        $this->fechaN = $fechaN;

        return $this;
    }
}
