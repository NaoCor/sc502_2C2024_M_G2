<?php
require_once '../../../../config/Conexion.php';

class ConsultaModel extends Conexion
{
    protected static $cnx;
    private $idRespuesta = null;
    private $idUsuario = null;
    private $idConsulta = null;
    private $respuesta = null;

    public function __construct() {}

    public function getIdRespuesta() {
        return $this->idRespuesta;
    }

    public function setIdRespuesta($idRespuesta) {
        $this->idRespuesta = $idRespuesta;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getIdConsulta() {
        return $this->idConsulta;
    }

    public function setIdConsulta($idConsulta) {
        $this->idConsulta = $idConsulta;
    }

    public function getRespuesta() {
        return $this->respuesta;
    }

    public function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }

    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function listarTodosConRespuestas() {
        self::getConexion();
        $sql = "SELECT c.idConsulta, c.idUsuario, c.pregunta, c.estado, r.respuesta
                FROM consulta c
                LEFT JOIN respuesta r ON c.idConsulta = r.idConsulta";
        $stmt = self::$cnx->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        self::desconectar();
        return $result;
    }

    public function activarConsulta() {
        self::getConexion();
        $sql = "UPDATE consulta SET estado = 1 WHERE idConsulta = :idConsulta";
        $stmt = self::$cnx->prepare($sql);
        $stmt->bindParam(":idConsulta", $this->idConsulta, PDO::PARAM_INT);
        $result = $stmt->execute();
        self::desconectar();
        return $result;
    }

    public function desactivarConsulta() {
        self::getConexion();
        $sql = "UPDATE consulta SET estado = 0 WHERE idConsulta = :idConsulta";
        $stmt = self::$cnx->prepare($sql);
        $stmt->bindParam(":idConsulta", $this->idConsulta, PDO::PARAM_INT);
        $result = $stmt->execute();
        self::desconectar();
        return $result;
    }
}

?>
