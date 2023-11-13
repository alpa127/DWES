<?php
    require_once 'usuario/Usuario.php';
    require_once 'pieza/Pieza.php';
    require_once 'vehiculo/Propietario.php';
    require_once 'vehiculo/Vehiculo.php';

class Modelo{
    private $conexion;

    const URL='mysql:host=127.0.0.1;port=3307;dbname=taller';
    const USUARIO='root';
    const PS='12345';


    function __construct(){
        try{
        //Establecer conexión con la BD
        $this->conexion = new PDO(Modelo::URL,Modelo::USUARIO,Modelo::PS);
        }catch(PDOException $e){
            echo $e->getMessage();

        }
    }

    function crearVehiculo(Vehiculo $v){
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('INSERT into vehiculo values(default,?,?,?)');
            $params = array($v->getPropietario(),$v->getMatricula(),$v->getColor());
            if($consulta->execute($params)){
            if($consulta->rowCount()==1){
                $resultado=true;
                $v->setCodigo($this->conexion->lastInsertId());
            }
                
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function obtenerVehiculo($m){
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('SELECT * FROM vehiculo WHERE matricula = ?');
            $params = array($m);
            if($consulta->execute($params)){
                if($fila=$consulta->fetch()){
                    $resultado = new Vehiculo(
                        $fila['codigo'],
                        $fila['propietario'],
                        $fila['matricula'],
                        $fila['color']
                    );
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function obtenerVehiculos($codigoP){
        $resultado = array();
        try {
            $consulta = $this->conexion->prepare('SELECT * FROM vehiculo WHERE matricula = ?');
            $params = array($codigoP);
            if($consulta->execute($params)){
                if($fila=$consulta->fetch()){
                    $v = new Vehiculo(
                        $fila['codigo'],
                        $fila['propietario'],
                        $fila['matricula'],
                        $fila['color']
                    );
                    //Añadir el vehiculo al array resultado
                    $resultado[]=$v;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function crearPropietario(Propietario $p){
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('INSERT into propietario values(default,?,?,?,?)');
            $params = array($p->getDni(),$p->getNombre(),$p->getTelefono(),$p->getEmail());
            if($consulta->execute($params)){
            if($consulta->rowCount()==1){
                $resultado=true;
                $p->setId($this->conexion->lastInsertId());
            }
                
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function obtenerPropietario($dni){
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('SELECT * FROM propietario WHERE dni = ?');
            $params = array($dni);
            if($consulta->execute($params)){
                if($fila=$consulta->fetch()){
                    $resultado = new Propietario(
                        $fila['codigo'],
                        $fila['dni'],
                        $fila['nombre'],
                        $fila['telefono'],
                        $fila['email']
                    );
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultado;
    }

    function obtenerPropietarios(){
        $resultado = array();
        try{
            $datos = $this->conexion->query('select * from propietario order by nombre');
            while($fila=$datos->fetch()){
                $p = new Propietario(
                    $fila[0],
                    $fila[1],
                    $fila[2],
                    $fila[3],
                    $fila[4]);
                $resultado[]=$p;
            }
            }catch(PDOException $e){
                echo $e->getMessage();
            }

        return $resultado;
    }

    function modificarUsuario(Usuario $u){
        $resultado = false;
        try {
           $consulta = $this->conexion->prepare('UPDATE usuarios set dni=?, nombre=?, perfil=? where id=?');
           $params= array($u->getDni(),$u->getNombre(),$u->getPerfil(),$u->getId());
           if($consulta->execute($params)){
            if($consulta->rowCount()==1){
                $resultado=true;
            }
           }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function obtenerUsuarios(){
        $resultado = array();
        try{
            $datos = $this->conexion->query("select * from usuarios order by perfil, nombre");
            while ($fila=$datos->fetch()) {
                $u = new Usuario($fila['id'],$fila['dni']
                ,$fila['nombre'],$fila['perfil']);
            }
            }catch(PDOException $e){
                echo $e->getMessage();
    
            }
        return $resultado;
    }

    function obtenerUsuarioDni(string $dni){
        $resultado = array();
        try{
            $datos = $this->conexion->query("select * from wherw dni = ?");
        
            while ($fila=$datos->fetch()) {
                $u = new Usuario($fila['id'],$fila['dni']
                ,$fila['nombre'],$fila['perfil']);
            }
            }catch(PDOException $e){
                echo $e->getMessage();
    
            }
        return $resultado;
    }

    function obtenerUsuarioId(int $id){
        $resultado = null;
        try{
            $consulta = $this->conexion->prepare("select * from wherw id = ?");
            $params = array($id);

            if($consulta->execute($params)){
                if($fila=$consulta->fetch()){
                $resultado = new Usuario($fila['id'],$fila['dni']
                ,$fila['nombre'],$fila['perfil']);
                }
            }
                
            
            }catch(PDOException $e){
                echo $e->getMessage();
    
            }
        return $resultado;
    }


    function crearUsuario(Usuario $u){
        $resultado = false;
        try {
            $consulta = $this->conexion->prepare('insert into usuarios values(default,?,?,sha2(?,512),?');
            $params = array($u->getDni(),$u->getNombre(),$u->getDni(),$u->getPerfil());
            if($consulta->execute($params)){
                if($consulta->rowCount()==1){
                    //Recuperar el autonúmerico en insert
                    $u ->setId($this->conexion->lastInsertId());
                    $resultado = true;
                }
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function obtenerUsuario(string $us, string $ps){
        $resultado = null;
        try {
            $consulta = $this->conexion->prepare('select * from usuarios
            where dni =? and ps = sha2(?,512)');
            $params = array($us,$ps);
          if($consulta->execute($params)){
            //Ver si se ha devuelto 1 registro con el usuario
            if($fila=$consulta->fetch()){
                $resultado = new Usuario($fila['id'],$fila['dni']
            ,$fila['nombre'],$fila['perfil']);
            }
          }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultado;
    }

    function modificarPieza(Pieza $p,string $codigoAntiguo){
        $resultado = false;
        try {
            $consulta = $this->conexion->prepare("update pieza set codigo=?,
            clase=?, descripcion=?,precio=?,stock=? where codigo = ?");
            $param = array($p->getCodigo(),$p->getClase(),$p->getDescripcion(),
            $p->getPrecio(),$p->getStock(),$codigoAntiguo);

            if($consulta->execute($param)){
                if($consulta->rowCount() == 1){
                    $resultado = true;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    function existenReparacionesusuario(int $id){
        $resultado=false;
        try{
            $consulta = $this->conexion->prepare("select * from reparacion 
            where usuario = ?");
            $parametros = array($id);
            if($consulta->execute($parametros)){
                //Comprobar si se ha borrado al menos 1 registro
                //En ese caso, ponemos resultado = true
                if($consulta->rowCount()==1){
                    $resultado=true;
                }
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }

    function existenReparaciones(string $codigo){
        $resultado=false;
        try{
            $consulta = $this->conexion->prepare("delect * from piezareparacion 
            where pieza = ?");
            $parametros = array($codigo);
            if($consulta->execute($parametros)){
                //Comprobar si se ha borrado al menos 1 registro
                //En ese caso, ponemos resultado = true
                if($consulta->rowCount()==1){
                    $resultado=true;
                }
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }

    function borrarUsuario(int $id){
        $resultado=false;
        try{
            $consulta = $this->conexion->prepare("delete from pieza where codigo = ? ");
            $parametros = array($id);
            if($consulta->execute($parametros)){
                //Comprobar si se ha borrado al menos 1 registro
                //En ese caso, ponemos resultado = true
                if($consulta->rowCount()==1){
                    $resultado=true;
                }
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }

    function borrarPieza(string $codigo){
        $resultado=false;
        try{
            $consulta = $this->conexion->prepare("delete from pieza where codigo = ? ");
            $parametros = array($codigo);
            if($consulta->execute($parametros)){
                //Comprobar si se ha borrado al menos 1 registro
                //En ese caso, ponemos resultado = true
                if($consulta->rowCount()==1){
                    $resultado=true;
                }
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }
    function insertarPieza(Pieza $p){
        $resultado = false;
        try {
            $consulta = $this->conexion->prepare(
                'insert into piezas values (?,?,?,?,?)');
                $parms = array($p->getCodigo(),$p->getClase(),$p->getDescripcion(),
                $p->getPrecio(),$p->getStock());
                if($consulta->execute($parms)){
                    $resultado=true;
                }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultado;
    }

    function obtenerPieza($codigo){
        $resultado=null;
        try {
            $datos = $this->conexion->query('select * from pieza where codigo = \''.$codigo.'\'');
            $consulta = $this->conexion->prepare('select * from pieza where codigo = ?');
            $parms = array($codigo);
            if($consulta->execute($parms)){
                //Recuperar el registro y crear un objeto Pieza un resultado
                while($fila=$consulta->fetch()){
                    $resultado = new Pieza();
                    $resultado->setCodigo($fila['codigo']);
                    $resultado->setCLase($fila['clase']);
                    $resultado->setDescripcion($fila['descripcion']);
                    $resultado->setPrecio($fila['precio']);
                    $resultado->setStock($fila['stock']);
                }
            }
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
        return $resultado;

    }
    function obtenerPiezas(){
        //Devuelve un array de objetos Pieza
        $resultado = array();
        try{
            //Ejecutamos consulta
            $datos = $this->conexion->query('select * from pieza order by codigo');
            if($datos!==false){
                //Recorrer los datos para crear objetos Pieza
                while($fila=$datos->fetch()){
                    //Creamos Pieza
                    $p = new Pieza();
                    $p->setCodigo($fila['codigo']);
                    $p->setCLase($fila['clase']);
                    $p->setDescripcion($fila['descripcion']);
                    $p->setPrecio($fila['precio']);
                    $p->setStock($fila['stock']);
                    //Añadir pieza al array resultado
                    $resultado[]=$p;
                }
            }
        }catch(PDOException $th){
            echo $th->getMessage();
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