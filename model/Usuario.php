<?php
require_once '../config/Conexion.php';
class Usuario extends Conexion {

    protected static $cnx;

    
    private $nombre = null;
    private $primerApellido = null;
    private $segundoApellido = null;
    private $correo = null;
    private $numero = null;
    private $contraseña = null;
    private $foto = null;
    private $idRol = null;
    
   
    public function getnombre(){
        return $this->nombre;
    }
    public function getprimerApellido(){
        return $this->primerApellido;
    }
    public function getsegundoApellido(){
        return $this->segundoApellido;
    }
    public function getcorreo(){
        return $this->correo;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getcontraseña(){
        return $this->contraseña;
    }
    public function getfoto(){
        return $this->foto;
    }
    public function getidRol(){
        return $this->idRol;
    }



    public function setnombre($nombre){
        $this->nombre = $nombre;
    }

    public function setprimerApellido($primerApellido){
        $this->primerApellido = $primerApellido;
    }

    
    public function setsegundoApellido($segundoApellido){
        $this->segundoApellido = $segundoApellido;
    }

    public function setcorreo($correo){
        $this->correo = $correo;
    }

    public function setNumero($Numero){
        $this->numero = $numero;
    }

    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }

    
    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function setrol($rol){
        $this->idRol = $rol;
    }


    
    public function __construct(){}

    public static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }

    public function login() {
        $query = "SELECT * FROM usuario WHERE correo like :emailPDO";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $email = $this->getcorreo();
            $resultado->bindParam(":emailPDO",$email,PDO::PARAM_STR);
            $resultado->execute();
       
            $datos = $resultado->fetch(PDO::FETCH_ASSOC);
            
            self::desconectar();
            
            if ($datos) {
                return $datos;
            } else {
                return ["no logrado" => false, "msg" => "Usuario no encontrado"];
            }
        } catch (PDOException $ex) {
            self::desconectar();
            $error = "Error " . $ex->getCode() . ": " . $ex->getMessage();
            return ["exito" => false, "msg" => $error];
        }
    }
    

   
    
}
?>