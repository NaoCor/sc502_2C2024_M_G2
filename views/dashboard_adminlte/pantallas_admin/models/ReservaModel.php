<?php
require_once '../../../../config/Conexion.php';
class Reserva extends Conexion
{
    protected static $cnx;
    private $idReserva = null; 
    private  $idCharla = null;
    private $nombre = null;
    private $nombreCharla = null;

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
    public function getnombreCharla(){
        return $this->nombreCharla;
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

    public function setnombreCharla($nombreCharla){
        $this->nombreCharla = $nombreCharla;
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
 

  
    public static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$cnx = null;
    }

    public function listarTodosDb()
    {
        $query = "select R.idReserva, C.nombreCharla, R.nombre, R.primerApellido, R.cantidad,R.correo, R.cedula, R.total from reserva R inner join charla C on R.idCharla= C.idCharla Order by idReserva;";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $reserva = new Reserva();
                $reserva->setidReserva($encontrado['idReserva']); 
                $reserva->setnombre($encontrado['nombre']);
                $reserva->setnombreCharla($encontrado['nombreCharla']);
                $reserva->setprimerApellido($encontrado['primerApellido']);
                $reserva->setentradas($encontrado['cantidad']);
                $reserva->setcorreo($encontrado['correo']); 
                $reserva->setcedula($encontrado['cedula']);
                $reserva->settotal($encontrado['total']);


                $arr[] = $reserva;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
    
    

       
}

?>