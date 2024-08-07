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
    private $provincia =null;
    private $canton=null;
    private $distrito=null;
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

    public function getsegundoApellido(){
        return $this->segundoApellido;
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
    
    public function getProvincia(){
        return  $this->Provincia ;
    }

    public function getCanton(){
        return  $this->canton ;
    }
    public function getDistrito(){
        return  $this->distrito ;
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
    public function setsegundoApellido($segundoApellido){
        $this->segundoApellido = $segundoApellido;
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


public function setProvincia($provincia){
    $this->provincia = $provincia;
}

public function setCanton($canton){
    $this->canton = $canton;
}
public function setDistrito($distrito){
    $this->distrito = $distrito;
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

public function setdescripcion($lugar){
    $this->lugar = $lugar;
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
        $query = "INSERT INTO `presentador`(idPresentador,`nombre`, `correo`, `numero_telefonico`) VALUES (:identificadorPDO,:nombrePDO, :correoPDO, :numeroPDO)";
        try {
            self::getConexion();
            $nombreP = $this->getnombre();
            $idPresentadorP= $this->getIdPresentador();
            $numeroP = $this->getnumero();
            $correoP = $this->getcorreo();
            
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":nombrePDO", $nombreP, PDO::PARAM_STR);
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
        $query = "INSERT INTO `charla` (`idPresentador`, `nombreCharla`, `fecha`, `hora`, `costo`, `tipo`, `duracion`, `formato`, `objetivo`, `descripcionCorta`, `consiste`) 
                  VALUES (:idPresentadorPDO, :nombreCharlaPDO, :fechaPDO, :horaPDO, :costoPDO, :tipoPDO, :duracionPDO, :formatoPDO, :objetivoPDO, :descripcionPDO, :consistePDO)";
        
        try {
            self::getConexion();
            $presentadorP = $this->getIdPresentador();
            $nombreCharlaP = $this->getNombreCharla();
            $fechaP = $this->getfecha();
            $horaP = $this->gethora();
            $costoP = $this->getcosto();
            $tipoP = $this->gettipo();
            $duracionP = $this->getDuracion();  
            $formatoP = $this->getformato();
            $objetivoP = $this->getobjetivo();
            $descripcionP = $this->getdescripcion();
            $consisteP = $this->getconsiste();
    
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":idPresentadorPDO", $presentadorP, PDO::PARAM_INT);
            $resultado->bindParam(":nombreCharlaPDO", $nombreCharlaP, PDO::PARAM_STR);
            $resultado->bindParam(":fechaPDO", $fechaP, PDO::PARAM_STR);
            $resultado->bindParam(":horaPDO", $horaP, PDO::PARAM_STR);
            $resultado->bindParam(":costoPDO", $costoP, PDO::PARAM_INT);
            $resultado->bindParam(":tipoPDO", $tipoP, PDO::PARAM_STR);
            $resultado->bindParam(":duracionPDO", $duracionP, PDO::PARAM_STR); 
            $resultado->bindParam(":formatoPDO", $formatoP, PDO::PARAM_STR);
            $resultado->bindParam(":objetivoPDO", $objetivoP, PDO::PARAM_STR);
            $resultado->bindParam(":descripcionPDO", $descripcionP, PDO::PARAM_STR);
            $resultado->bindParam(":consistePDO", $consisteP, PDO::PARAM_STR);
    
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