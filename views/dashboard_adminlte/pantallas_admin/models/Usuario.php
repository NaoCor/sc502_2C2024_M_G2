<?php
require_once '../../../../config/Conexion.php';

class Usuario extends Conexion
{
    /*=============================================
    =            Atributos de la Clase            =
    =============================================*/
    protected static $cnx;
    private $idUsuario = null;
    private $nombre = null;
    private $primerApellido = null;
    private $segundoApellido = null;
    private $correo = null;
    private $numeroTelefonico = null;
    private $contrasena = null;
    private $foto = null;
    private $idRol = null;
    private $estado = null;

    /*=====  End of Atributos de la Clase  ======*/

    /*=============================================
    =            Encapsuladores de la Clase       =
    =============================================*/
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;
    }
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function getNumeroTelefonico()
    {
        return $this->numeroTelefonico;
    }
    public function setNumeroTelefonico($numeroTelefonico)
    {
        $this->numeroTelefonico = $numeroTelefonico;
    }
    public function getContrasena()
    {
        return $this->contrasena;
    }
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
    public function getIdRol()
    {
        return $this->idRol;
    }
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    /*=====  End of Encapsuladores de la Clase  ======*/

    /*=============================================
    =            Métodos de la Clase              =
    =============================================*/
    public static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }

    public function listarTodosDb(){
        $query = "SELECT u.*, r.nombreRol FROM usuario u 
                  JOIN rol r ON u.idRol = r.idRol";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $user = new Usuario();
                $user->setIdUsuario($encontrado['idUsuario']);
                $user->setNombre($encontrado['nombre']);
                $user->setPrimerApellido($encontrado['primer_apellido']);
                $user->setSegundoApellido($encontrado['segundo_apellido']);
                $user->setCorreo($encontrado['correo']);
                $user->setNumeroTelefonico($encontrado['numero_telefonico']);
                $user->setContrasena($encontrado['contrasena']);
                $user->setFoto($encontrado['foto']);
                $user->setIdRol($encontrado['idRol']); // idRol en lugar del nombre del rol
                $user->setEstado($encontrado['estado']);
                $arr[] = $user;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return json_encode($error);
        }
    }

    public function verificarExistenciaDb(){
        $query = "SELECT * FROM usuario WHERE correo = :correo";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $correo = $this->getCorreo();
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            $encontrado = false;
            foreach ($resultado->fetchAll() as $reg) {
                $encontrado = true;
            }
            return $encontrado;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return $error;
        }
    }

    public function guardarEnDb(){
        $query = "INSERT INTO usuario (nombre, primer_apellido, segundo_apellido, correo, numero_telefonico, contrasena, foto, idRol, estado) 
                  VALUES (:nombre, :primerApellido, :segundoApellido, :correo, :numeroTelefonico, :contrasena, :foto, :idRol, :estado)";
        try {
            self::getConexion();
            $nombre = $this->getNombre();
            $primerApellido = $this->getPrimerApellido();
            $segundoApellido = $this->getSegundoApellido();
            $correo = $this->getCorreo();
            $numeroTelefonico = $this->getNumeroTelefonico();
            $contrasena = $this->getContrasena();
            $foto = $this->getFoto();
            $idRol = $this->getIdRol();
            $estado = $this->getEstado();

            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $resultado->bindParam(":primerApellido", $primerApellido, PDO::PARAM_STR);
            $resultado->bindParam(":segundoApellido", $segundoApellido, PDO::PARAM_STR);
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->bindParam(":numeroTelefonico", $numeroTelefonico, PDO::PARAM_INT);
            $resultado->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);
            $resultado->bindParam(":foto", $foto, PDO::PARAM_STR);
            $resultado->bindParam(":idRol", $idRol, PDO::PARAM_INT);
            $resultado->bindParam(":estado", $estado, PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return json_encode($error);
        }
    }

    public function activar(){
        $idUsuario = $this->getIdUsuario();
        $query = "UPDATE usuario SET estado = '1' WHERE idUsuario = :idUsuario";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            self::$cnx->beginTransaction();
            $resultado->execute();
            self::$cnx->commit();
            self::desconectar();
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            self::$cnx->rollBack();
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return $error;
        }
    }

    public function desactivar(){
        $idUsuario = $this->getIdUsuario();
        $query = "UPDATE usuario SET estado = '0' WHERE idUsuario = :idUsuario";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            self::$cnx->beginTransaction();
            $resultado->execute();
            self::$cnx->commit();
            self::desconectar();
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            self::$cnx->rollBack();
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return $error;
        }
    }

    public static function mostrar($correo){
        $query = "SELECT u.*, r.nombreRol FROM usuario u 
                  JOIN rol r ON u.idRol = r.idRol WHERE correo = :correo";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetch();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return $error;
        }
    }

    public function llenarCampos($idUsuario){
        $query = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $this->setIdUsuario($encontrado['idUsuario']);
                $this->setNombre($encontrado['nombre']);
                $this->setPrimerApellido($encontrado['primer_apellido']);
                $this->setSegundoApellido($encontrado['segundo_apellido']);
                $this->setCorreo($encontrado['correo']);
                $this->setNumeroTelefonico($encontrado['numero_telefonico']);
                $this->setContrasena($encontrado['contrasena']);
                $this->setFoto($encontrado['foto']);
                $this->setIdRol($encontrado['idRol']); // idRol en lugar del nombre del rol
                $this->setEstado($encontrado['estado']);
            }
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return $error;
        }
    }
}
?>
