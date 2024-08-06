<?php
require_once '../../../../config/Conexion.php';

class LugarSeguro extends Conexion
{
    /*=============================================
    =            Atributos de la Clase            =
    =============================================*/
    protected static $cnx;
    private $idLugarSeguro = null;  
    private $nombre = null;
    private $direccion = null;
    private $iframe = null;
    private $datosContacto = null; 
    private $idProvincia = null;
    /*=====  End of Atributos de la Clase  ======*/

    /*=============================================
    =            Encapsuladores de la Clase       =
    =============================================*/
    public function getId() { 
        return $this->idLugarSeguro; 
    }

    public function setId($id) { 
        $this->idLugarSeguro = $id; 
    }

    public function getNombre() { 
        return $this->nombre; 
    }

    public function setNombre($nombre) { 
        $this->nombre = $nombre; 
    }

    public function getDireccion() { 
        return $this->direccion; 
    }

    public function setDireccion($direccion) { 
        $this->direccion = $direccion; 
    }

    public function getIframe() { 
        return $this->iframe; 
    }

    public function setIframe($iframe) { 
        $this->iframe = $iframe; 
    }

    public function getDatosContacto() { 
        return $this->datosContacto; 
    }

    public function setDatosContacto($datosContacto) { 
        $this->datosContacto = $datosContacto; 
    }

    public function getIdProvincia() { 
        return $this->idProvincia; 
    }

    public function setIdProvincia($idProvincia) { 
        $this->idProvincia = $idProvincia; 
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

    public function listarTodosDb()
    {
        $query = "SELECT * FROM lugaresseguros"; 
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $lugar = new LugarSeguro();
                $lugar->setId($encontrado['idLugarSeguro']); 
                $lugar->setNombre($encontrado['nombre']);
                $lugar->setDireccion($encontrado['direccion']);
                $lugar->setIframe($encontrado['iframe']);
                $lugar->setDatosContacto($encontrado['datosContacto']); 
                $lugar->setIdProvincia($encontrado['idProvincia']);
                $arr[] = $lugar;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
    
    

        public function eliminarLugarSeguro()
        {
            $query = "DELETE FROM lugaresseguros WHERE idLugarSeguro=:idLugarSeguro";
            try {
                self::getConexion();
                $idLugarSeguro = $this->getId();
                $resultado = self::$cnx->prepare($query);
                $resultado->bindParam(":idLugarSeguro", $idLugarSeguro, PDO::PARAM_INT);
                self::$cnx->beginTransaction();
                $resultado->execute();
                self::$cnx->commit();
                self::desconectar();
                return $resultado->rowCount();
                tabla.ajax.reload();
            } catch (PDOException $Exception) {
                self::$cnx->rollBack();
                self::desconectar();
                $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
                return json_encode($error);
            }
        }
        

    /*=====  End of Métodos de la Clase  ======*/
}
?>
