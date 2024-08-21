<?php
require_once '../config/Conexion.php';

class consultaModel extends Conexion {
   
    private $pregunta = null;
    private $idUsuario = null;

    public function getPregunta() {
        return $this->pregunta;
    }

    public function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    private function getConexion() {
        return Conexion::conectar();
    }

    public function guardarconOO() {
        $query = "INSERT INTO consulta (idUsuario, pregunta) VALUES (:idUsuarioPDO, :preguntaPDO)";
        $cnx = null;
        try {
            $cnx = $this->getConexion();
            $preguntaP = $this->getPregunta();
            $idUsuarioP = $this->getIdUsuario();
    
            $resultado = $cnx->prepare($query);
            $resultado->bindParam(":preguntaPDO", $preguntaP, PDO::PARAM_STR);
            $resultado->bindParam(":idUsuarioPDO", $idUsuarioP, PDO::PARAM_INT);
    
            if (!$resultado->execute()) {
                throw new Exception("Error al ejecutar la consulta.");
            }
    
            return json_encode(["exito" => true, "msg" => "Pregunta enviada exitosamente!"]);
        } catch (PDOException $ex) {
            error_log("Error de PDO: " . $ex->getMessage()); 
            return json_encode(["exito" => false, "msg" => "Error: " . $ex->getMessage()]);
        } catch (Exception $e) {
            error_log("Error general: " . $e->getMessage()); 
            return json_encode(["exito" => false, "msg" => "Error: " . $e->getMessage()]);
        } finally {
            if ($cnx) {
                $cnx = null;
            }
        }
    }
    
}
?>