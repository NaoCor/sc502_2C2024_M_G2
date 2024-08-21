<?php
require_once '../../../../config/Conexion.php';

class Denuncia extends Conexion
{
    /*=============================================
    =            Atributos de la Clase            =
    =============================================*/
    protected static $cnx;
    private $idDenuncia = null;  
    private $idDenunciado = null;
    private $idDenunciante = null;
    private $tipo = null;
    private $fecha = null;
    private $lugar = null;
    private $relacionAgresor = null;
    private $documentacion = null;
    private $estado = null;  
    /*=====  End of Atributos de la Clase  ======*/

    /*=============================================
    =            Encapsuladores de la Clase       =
    =============================================*/
    public function getIdDenuncia() { 
        return $this->idDenuncia; 
    }

    public function setIdDenuncia($idDenuncia) { 
        $this->idDenuncia = $idDenuncia; 
    }

    public function getIdDenunciado() { 
        return $this->idDenunciado; 
    }

    public function setIdDenunciado($idDenunciado) { 
        $this->idDenunciado = $idDenunciado; 
    }

    public function getIdDenunciante() { 
        return $this->idDenunciante; 
    }

    public function setIdDenunciante($idDenunciante) { 
        $this->idDenunciante = $idDenunciante; 
    }

    public function getTipo() { 
        return $this->tipo; 
    }

    public function setTipo($tipo) { 
        $this->tipo = $tipo; 
    }

    public function getFecha() { 
        return $this->fecha; 
    }

    public function setFecha($fecha) { 
        $this->fecha = $fecha; 
    }

    public function getLugar() { 
        return $this->lugar; 
    }

    public function setLugar($lugar) { 
        $this->lugar = $lugar; 
    }

    public function getRelacionAgresor() { 
        return $this->relacionAgresor; 
    }

    public function setRelacionAgresor($relacionAgresor) { 
        $this->relacionAgresor = $relacionAgresor; 
    }

    public function getDocumentacion() { 
        return $this->documentacion; 
    }

    public function setDocumentacion($documentacion) { 
        $this->documentacion = $documentacion; 
    }

    public function getEstado() { 
        return $this->estado; 
    }

    public function setEstado($estado) {  
        $this->estado = $estado; 
    }
    /*=====  End of Encapsuladores de la Clase  ======*/

    /*=============================================
    =            Métodos de la Clase              =
    =============================================*/
    public static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$cnx = null;
    }

    public function listarTodas()
    {
        $query = "SELECT * FROM Denuncia"; 
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $denuncia = new Denuncia();
                $denuncia->setIdDenuncia($encontrado['idDenuncia']); 
                $denuncia->setIdDenunciado($encontrado['idDenunciado']);
                $denuncia->setIdDenunciante($encontrado['idDenunciante']);
                $denuncia->setTipo($encontrado['tipo']);
                $denuncia->setFecha($encontrado['fecha']);
                $denuncia->setLugar($encontrado['lugar']);
                $denuncia->setRelacionAgresor($encontrado['relacion_agresor']);
                $denuncia->setDocumentacion($encontrado['documentacion']);
                $denuncia->setEstado($encontrado['estado']); 
                $arr[] = $denuncia;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }

    public function eliminarDenuncia()
    {
        $query = "DELETE FROM Denuncia WHERE idDenuncia = :idDenuncia";
        try {
            self::getConexion();
            $idDenuncia = $this->getIdDenuncia();
            $resultado = self::$cnx->prepare($query);
            $resultado->bindParam(":idDenuncia", $idDenuncia, PDO::PARAM_INT);
            self::$cnx->beginTransaction();
            $resultado->execute();
            self::$cnx->commit();
            self::desconectar();
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            self::$cnx->rollBack();
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
    public function cambiarEstado($estado)
    {
        $query = "UPDATE Denuncia SET estado = :estado WHERE idDenuncia = :idDenuncia";
        try {
            self::getConexion();
            $stmt = self::$cnx->prepare($query);
            $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);
            $stmt->bindParam(':idDenuncia', $this->idDenuncia, PDO::PARAM_INT);
            $stmt->execute();
            self::desconectar();
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            self::desconectar();
            return false;
        }
    }

    /*=====  End of Métodos de la Clase  ======*/
}

?>
