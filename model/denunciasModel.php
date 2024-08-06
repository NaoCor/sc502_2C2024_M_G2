<?php
require_once '../config/Conexion.php';

class DenunciasModel extends Conexion {
    protected static $cnx;

    // Denunciante
    private $nombre_denunciante;
    private $primer_apellido_denunciante;
    private $segundo_apellido_denunciante;
    private $telefono_denunciante;
    private $correo_denunciante;

    // Denunciado
    private $nombre_denunciado;
    private $primer_apellido_denunciado;
    private $segundo_apellido_denunciado;

    // Denuncia
    private $tipo;
    private $fecha;
    private $lugar;
    private $relacion_agresor;
    private $documentacion;

    private $idDenunciante;
    private $idDenunciado;
    private $idDenuncia;

    // Métodos getter y setter
    public function getNombre_denunciante() {
        return $this->nombre_denunciante;
        }

    public function getPrimer_apellido_denunciante() {
        return $this->primer_apellido_denunciante;
        }

    public function getSegundo_apellido_denunciante() { 
        return $this->segundo_apellido_denunciante; 
        }
        
    public function getTelefono_denunciante() { 
        return $this->telefono_denunciante; 
    }
    
    public function getCorreo_denunciante() { 
        return $this->correo_denunciante; 
    }
    public function setNombre_denunciante($nombre) {
        $this->nombre_denunciante = $nombre;
        }

    public function setPrimer_apellido_denunciante($apellido) { 
        $this->primer_apellido_denunciante = $apellido; 
    }

    public function setSegundo_apellido_denunciante($apellido) {
        $this->segundo_apellido_denunciante = $apellido;
        }

    public function setTelefono_denunciante($telefono) { 
        $this->telefono_denunciante = $telefono;
    }

    public function setCorreo_denunciante($correo) { 
        $this->correo_denunciante = $correo; 
    }

    public function getNombre_denunciado() { 
        return $this->nombre_denunciado;
    }
    
    public function getPrimer_apellido_denunciado() { 
        return $this->primer_apellido_denunciado; 
    }

    public function getSegundo_apellido_denunciado() {
        return $this->segundo_apellido_denunciado; 
        }

    public function setNombre_denunciado($nombre) {
        $this->nombre_denunciado = $nombre; 
        }

    public function setPrimer_apellido_denunciado($apellido) { 
        $this->primer_apellido_denunciado = $apellido; 
        }

    public function setSegundo_apellido_denunciado($apellido) {
        $this->segundo_apellido_denunciado = $apellido; 
        }

    public function getTipo() {
        return $this->tipo;
        }

    public function getFecha() {
        return $this->fecha; 
        }

    public function getLugar() { 
        return $this->lugar;
        }

    public function getRelacion_agresor() { return 
        $this->relacion_agresor; 
    }
    public function getDocumentacion() 
    { return $this->documentacion;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo; 
    }
    public function setFecha($fecha) {
        $this->fecha = $fecha; 
    }
    public function setLugar($lugar) { 
        $this->lugar = $lugar; 
    }
    public function setRelacion_agresor($relacion) { return
        $this->relacion_agresor = $relacion; 
        }
    public function setDocumentacion($documentacion) { 
        $this->documentacion = $documentacion; 
    }

    public function getidDenuncia() { 
        return $this->idDenuncia;
        }

    public function getidDenunciante(){
        return $this->idDenunciante;
    }
    public function getidDenunciado(){
        return $this->idDenunciado;
    }

    public function __construct() {}

    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function guardarDenunciante() {
        $query = "INSERT INTO Denunciante (nombre, primer_apellido, segundo_apellido, correo, numero_telefonico) 
                VALUES (:nombrePDO, :primer_apellidoPDO, :segundo_apellidoPDO, :correo_denunciantePDO, :telefono_denunciantePDO)";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query); 
            $resultado->bindParam(':nombrePDO', $this->getNombre_denunciante(), PDO::PARAM_STR);
            $resultado->bindParam(':primer_apellidoPDO', $this->getPrimer_apellido_denunciante(), PDO::PARAM_STR);
            $resultado->bindParam(':segundo_apellidoPDO', $this->getSegundo_apellido_denunciante(), PDO::PARAM_STR);
            $resultado->bindParam(':correo_denunciantePDO', $this->getCorreo_denunciante(), PDO::PARAM_STR);
            $resultado->bindParam(':telefono_denunciantePDO', $this->getTelefono_denunciante(), PDO::PARAM_STR);
            $resultado->execute();
            $this->idDenunciante = self::$cnx->lastInsertId(); // Obtener el ID del denunciante
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            throw new Exception("Error: " . $ex->getMessage());
        }
    }

    public function guardarDenunciado() {
        $query = "INSERT INTO Denunciado (nombre, primer_apellido, segundo_apellido) 
                VALUES (:nombrePDO, :primer_apellidoPDO, :segundo_apellidoPDO)";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query); 
            $resultado->bindParam(':nombrePDO', $this->getNombre_denunciado(), PDO::PARAM_STR);
            $resultado->bindParam(':primer_apellidoPDO', $this->getPrimer_apellido_denunciado(), PDO::PARAM_STR);
            $resultado->bindParam(':segundo_apellidoPDO', $this->getSegundo_apellido_denunciado(), PDO::PARAM_STR);
            $resultado->execute();
            $this->idDenunciado = self::$cnx->lastInsertId(); // Obtener el ID del denunciado
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            throw new Exception("Error: " . $ex->getMessage());
        }
    }

    public function guardarDenuncia() {
        $query = "INSERT INTO Denuncia (idDenunciado, idDenunciante, tipo, fecha, lugar, relacion_agresor, documentacion) 
                VALUES (:idDenunciadoPDO, :idDenunciantePDO, :tipoPDO, :fechaPDO, :lugarPDO, :relacion_agresorPDO, :documentacionPDO)";
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(':idDenunciadoPDO', $this->idDenunciado, PDO::PARAM_INT);
            $resultado->bindParam(':idDenunciantePDO', $this->idDenunciante, PDO::PARAM_INT);
            $resultado->bindParam(':tipoPDO', $this->getTipo(), PDO::PARAM_STR);
            $resultado->bindParam(':fechaPDO', $this->getFecha(), PDO::PARAM_STR);
            $resultado->bindParam(':lugarPDO', $this->getLugar(), PDO::PARAM_STR);
            $resultado->bindParam(':relacion_agresorPDO', $this->getRelacion_agresor(), PDO::PARAM_STR);
            $resultado->bindParam(':documentacionPDO', $this->getDocumentacion(), PDO::PARAM_STR);
            $resultado->execute();
            $this->idDenuncia = self::$cnx->lastInsertId(); // Obtener el ID del denunciante
            self::desconectar();
        } catch (PDOException $ex) {
            self::desconectar();
            throw new Exception("Error: " . $ex->getMessage());
        }
    }
    
}
?>