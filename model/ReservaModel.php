<?php
require_once '../config/Conexion.php';
class ReservaModel extends Conexion {

    protected static $cnx;
    private $idReserva = null; 
    private  $idCharla = null;
    private $nombre = null;
    private $cedula = null;
    private $correo = null; 
    private $numero = null; 
    private $primerApellido = null;
    private $entradas = null;
    private $total = null;
    private $metodo = null;
    
   public function getidReserva(){
    return $this->idReserva;
   }

   public function getidCharla(){
    return $this->idCharla;
   }
    public function getnombre(){
        return $this->nombre;
    }
    
    public function getcedula(){
        return $this->cedula;
    }

    public function getprimerApellido(){
        return $this->primerApellido;
    }
    public function getentradas(){
        return $this->entradas;
    }
    public function gettotal(){
        return $this->total;
    
    }
     
    public function getMetodoP(){
        return $this->metodo;
    
    }
 
    public function getcorreo(){
        return $this->correo;
    }

    public function setidReserva($idReserva){
        $this->idReserva = $idReserva;
    }

    public function setidCharla($idCharla){
        $this->idCharla = $idCharla;
    }

    public function setnombre($nombre){
        $this->nombre = $nombre;
    }

    public function setcedula($cedula){
        $this->cedula = $cedula;
    }

    public function setprimerApellido($primerApellido){
        $this->primerApellido = $primerApellido;
    }

    
    public function setentradas($entradas){
        $this->entradas = $entradas;
    }

    public function settotal($total){
        $this->total = $total;
    }

    public function setmetodo($metodo){
        $this->metodo = $metodo;
    }

  
    public function setcorreo($correo){
        $this->correo = $correo;
    }
 


    
    public function __construct(){}

    public static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }

    public function guardar() {
        $query = "INSERT INTO `reserva`(`idCharla`, `primerApellido`, `nombre`, `cedula`, `correo`, `metodoPago`, `total`) 
VALUES (:idCharlaPDO, :apellidoPDO, :nombrePDO, :cedulaPDO, :correoPDO, :metodoPDO, :totalPDO)";
try {
    self::getConexion();
    $idCharlaP = $this->getidCharla();
    $nombreP = $this->getnombre();
    $apellidoP = $this->getprimerApellido();
    $cedulaP = $this->getcedula();
    $correoP = $this->getcorreo();
    $entradasP = $this->getentradas(); // Not used in the query
    $totalP = $this->gettotal();
    $metodoP = $this->getMetodoP(); // Use this instead of $metodo
    
    $resultado = self::$cnx->prepare($query);
    $resultado->bindParam(":idCharlaPDO", $idCharlaP, PDO::PARAM_INT);
    $resultado->bindParam(":apellidoPDO", $apellidoP, PDO::PARAM_STR);
    $resultado->bindParam(":nombrePDO", $nombreP, PDO::PARAM_STR);
    $resultado->bindParam(":cedulaPDO", $cedulaP, PDO::PARAM_STR);
    $resultado->bindParam(":correoPDO", $correoP, PDO::PARAM_STR);
    $resultado->bindParam(":totalPDO", $totalP, PDO::PARAM_INT);
    $resultado->bindParam(":metodoPDO", $metodoP, PDO::PARAM_STR);

    $resultado->execute();
    self::desconectar();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

    }
}
?>