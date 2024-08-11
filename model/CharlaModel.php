<?php
require_once '../config/Conexion.php';
class CharlaModel extends Conexion {

    protected static $cnx;

    private $idPresentador = null;
    private  $nombre =null;
    private  $primerApellido =null;
    private  $segundoApellido=null;
    private  $numero =null;
    private  $correo =null;

    private $idCharla = null;
    private $nombreCharla =null;
    private $fecha =null;
    private $hora =null;
    private $costo=null;
    private $lugar =null;
    private $tipo =null;
    private  $formato=null;
    private  $objetivo =null;
    private $descripcion =null;
    private $consiste=null;
    private $poster =null;
    private $duracion =null;
    
    public function getIdPresentador(){
        return $this->idPresentador;
    }

    public function getnombre(){
        return $this->nombre;
    }
    public function getprimerApellido(){
        return $this->primerApellido;
    }

   
    public function getnumero(){
        return $this->numero;
    }
    public function getcorreo(){
        return $this->correo;
    }

    public function getDuracion(){
        return  $this->duracion;
    }
    public function getNombreCharla(){
        return  $this->nombreCharla;
    }
    public function getfecha(){
        return $this->fecha;
    }
    public function gethora(){
        return $this->hora ;
    }
    public function getcosto(){
        return  $this->costo ;
    }
    
    public function getlugar(){
        return  $this->lugar ;
    }

  
    public function gettipo(){
        return  $this->tipo ;
    }
    public function getformato(){
        return $this->formato ;
    }
    public function getobjetivo(){
        return $this->costo ;
    }
    
    public function getdescripcion(){
        return  $this->lugar ;
    }
    public function getconsiste(){
        return $this->consiste ;
    }
    public function getposter(){
        return  $this->poster ;
    }

    
   
 



//gets presentador

    public function setIdPresentador($idPresentador){
        $this->idPresentador = $idPresentador;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setprimerApellido($primerApellido){
        $this->primerApellido = $primerApellido;
    }

    public function setnumero($numero){
        $this->numero = $numero;
    }
    
    public function setcorreo($correo){
        $this->correo = $correo;
    }

//sets charla
public function setidCharla($idCharla){
    $this->idCharla = $idCharla;
} 
public function setNombreCharla($nombreCharla){
    $this->nombreCharla = $nombreCharla;
}
public function setfecha($fecha){
    $this->fecha = $fecha;
}
public function sethora($hora){
    $this->hora = $hora;
}
public function setcosto($costo){
    $this->costo = $costo;
}


public function setlugar($lugar){
    $this->lugar = $lugar;
}


public function settipo($tipo){
    $this->tipo = $tipo;
}
public function setformato($formato){
    $this->formato = $formato;
}
public function setobjetivo($objetivo){
    $this->objetivo = $objetivo;
}

public function setdescripcion($descripcion){
    $this->descripcion = $descripcion;
}
public function setconsiste($consiste){
    $this->consiste = $consiste;
}
public function setposter($poster){
    $this->poster = $poster;
}
public function setduracion($duracion){
    $this->duracion = $duracion;
}



    //constructor
    public function __construct(){}

    public static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }

    

    public function guardarPresentador(){
        $query = "INSERT INTO `presentador` (`idPresentador`, `nombre`, `primerApellido`, `correo`, `numero_telefonico`) 
                  VALUES (:identificadorPDO, :nombrePDO, :primerApellidoPDO, :correoPDO, :numeroPDO)";
        try {
            self::getConexion();
            $nombreP = $this->getnombre();
            $primerApellidoP = $this->getprimerApellido();
            $idPresentadorP = $this->getIdPresentador();
            $numeroP = $this->getnumero();
            $correoP = $this->getcorreo();
            
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":nombrePDO", $nombreP, PDO::PARAM_STR);
            $resultado->bindParam(":primerApellidoPDO", $primerApellidoP, PDO::PARAM_STR);
            $resultado->bindParam(":identificadorPDO", $idPresentadorP, PDO::PARAM_INT);
            $resultado->bindParam(":correoPDO", $correoP, PDO::PARAM_STR);
            $resultado->bindParam(":numeroPDO", $numeroP, PDO::PARAM_INT);
            
            $resultado->execute();
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            $error = "Error ".$ex->getCode().": ".$ex->getMessage();
            return json_encode($error);
        }
    }
    


    public function guardarCharla(){
        $query = "INSERT INTO `charla`(`idPresentador`, `nombreCharla`, `lugar`, `fecha`, `hora`, `costo`, `tipo`, `duracion`, `formato`, `objetivo`, `descripcionCorta`, `consiste`, `foto`)
         VALUES (:idPresentadorPDO,:nombreCharlaPDO,:lugarPDO, :fechaPDO,:horaPDO, :costoPDO, :tipoPDO, :duracionPDO, :formatoPDO, :objetivoPDO, :descripcionCortaPDO, :consistePDO, :fotoPDO)";
        
        try {
            self::getConexion();
            $presentadorP = $this->getIdPresentador();
            $nombreCharlaP = $this->getNombreCharla();
            $lugarP = $this->getlugar();
            $fechaP= $this->getfecha();
            $horaP= $this->gethora();
            $costoP= $this->getcosto();
            $tipoP= $this->gettipo();
            $duracionP = $this->getDuracion();
            $formatoP= $this->getformato();
            $objetivoP = $this->getobjetivo();
            $descripcionCortaP = $this->getdescripcion();
            $consisteP= $this->getconsiste();
            $posterP= $this->getposter();

            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":idPresentadorPDO", $presentadorP, PDO::PARAM_INT);
            $resultado->bindParam(":nombreCharlaPDO", $nombreCharlaP, PDO::PARAM_STR);
            $resultado->bindParam(":lugarPDO", $lugarP, PDO::PARAM_STR);
            $resultado->bindParam(":fechaPDO", $fechaP, PDO::PARAM_STR); 
            $resultado->bindParam(":horaPDO", $horaP, PDO::PARAM_STR);  
            $resultado->bindParam(":costoPDO", $costoP, PDO::PARAM_INT); 
            $resultado->bindParam(":tipoPDO", $tipoP, PDO::PARAM_STR);
            $resultado->bindParam(":duracionPDO", $duracionP, PDO::PARAM_STR);
            $resultado->bindParam(":formatoPDO", $formatoP, PDO::PARAM_STR);
            $resultado->bindParam(":objetivoPDO", $objetivoP, PDO::PARAM_STR);
            $resultado->bindParam(":descripcionCortaPDO", $descripcionCortaP, PDO::PARAM_STR);
            $resultado->bindParam(":consistePDO", $consisteP, PDO::PARAM_STR);
            $resultado->bindParam(":fotoPDO", $fotoP, PDO::PARAM_STR);
    
            $resultado->execute();
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            $error = "Error ".$ex->getCode().": ".$ex->getMessage();
            return json_encode($error);
        }
    }
    
    
    
}

?>