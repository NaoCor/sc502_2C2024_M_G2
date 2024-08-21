<?php
require_once '../../../../config/Conexion.php';

class RespuestaModel extends Conexion {
    private $idConsulta;
    private $idUsuario;
    private $respuesta;

    public function __construct() {}

    public function setIdConsulta($idConsulta) {
        $this->idConsulta = $idConsulta;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }

    public static function getConexion() {
        return Conexion::conectar();
    }

    public static function desconectar($cnx) {
        $cnx = null;
    }

    public function guardar($idUsuario, $idConsulta, $respuesta) {
        $cnx = self::getConexion();
        $query = "INSERT INTO respuesta (idUsuario, idConsulta, respuesta) VALUES (:idUsuario, :idConsulta, :respuesta)";
        try {
            $resultado = $cnx->prepare($query);
            $resultado->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $resultado->bindParam(":idConsulta", $idConsulta, PDO::PARAM_INT);
            $resultado->bindParam(":respuesta", $respuesta, PDO::PARAM_STR);
            $cnx->beginTransaction();
            $resultado->execute();
            $cnx->commit();
            self::desconectar($cnx);
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            $cnx->rollBack();
            self::desconectar($cnx);
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            return $error;
        }
    }
}
?>
