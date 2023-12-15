<?php
 require_once 'mcDaw.php';
 require_once 'Tienda.php';
 require_once 'Producto.php';

 class Modelo{

    private $conexion;

    const URL = 'mysql:host=localhost;port=3306;dbname=mcdaw';
    const USUARIO = 'root';
    const PS = '';

    function __construct()
    {
        try {
            //Establecer conexión con la BD
            $this->conexion = new PDO(Modelo::URL, Modelo::USUARIO, Modelo::PS);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function obtenerTienda()
    {
        $resultado = array();
        try {
            $consulta = $this->conexion->prepare('SELECT * from tienda 
            order by nombre');
            $params = array();
            if ($consulta->execute($params)) {
                if ($fila = $consulta->fetch()) {
                    $resultado[] = new Tienda(
                        $fila['codigo'],
                        $fila['nombre'],
                        $fila['telefono']
                        
                    );
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultado;
    }

    function obtenerDatosTienda($codT)
    {
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('SELECT * from tienda 
            where codigo = ?');
            $params = array($codT);
            if ($consulta->execute($params)) {
                if ($fila = $consulta->fetch()) {
                    $resultado = new Tienda(
                        $fila['codigo'],
                        $fila['nombre'],
                        $fila['telefono']
                        
                    );
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultado;
    }

    function obtenerProducto()
    {
        $resultado = array();
        try {
            $consulta = $this->conexion->prepare('SELECT * from producto 
            order by nombre');
            $params = array();
            if ($consulta->execute($params)) {
                if ($fila = $consulta->fetch()) {
                    $resultado = new Tienda(
                        $fila['codigo'],
                        $fila['nombre'],
                        $fila['telefono']
                        
                    );
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultado;
    }

    function obtenerDatosProducto($codP)
    {
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('SELECT * from tienda 
            where codigo = ?');
            $params = array($codP);
            if ($consulta->execute($params)) {
                if ($fila = $consulta->fetch()) {
                    $resultado = new Tienda(
                        $fila['codigo'],
                        $fila['nombre'],
                        $fila['telefono']
                        
                    );
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultado;
    }


    /**
     * Get the value of conexion
     */
    public function getConexion()
    {
        return $this->conexion;
    }

    /**
     * Set the value of conexion
     *
     * @return  self
     */
    public function setConexion($conexion)
    {
        $this->conexion = $conexion;

        return $this;
    }

 }
?>