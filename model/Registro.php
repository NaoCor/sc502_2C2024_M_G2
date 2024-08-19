<?php
require_once '../config/Conexion.php';

class Registro {
    private $conn;

    public function __construct() {
        $this->conn = Conexion::conectar();
    }

    public function correoExiste($correo) {
        try {
            $query = "SELECT COUNT(*) FROM usuario WHERE correo = :correo";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':correo', $correo);
            $stmt->execute();
            $count = $stmt->fetchColumn();
            return $count > 0;
        } catch (PDOException $e) {
            die("Error al verificar correo: " . $e->getMessage());
        }
    }

    public function registrarUsuario($nombre, $primer_apellido, $segundo_apellido, $correo, $numero_telefonico, $contrasena) {
        try {
            $query = "INSERT INTO usuario (nombre, primer_apellido, segundo_apellido, correo, numero_telefonico, contrasena, idRol) 
                      VALUES (:nombre, :primer_apellido, :segundo_apellido, :correo, :numero_telefonico, :contrasena, 2)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':primer_apellido', $primer_apellido);
            $stmt->bindParam(':segundo_apellido', $segundo_apellido);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':numero_telefonico', $numero_telefonico);
            $stmt->bindParam(':contrasena', $contrasena);

            return $stmt->execute();
        } catch (PDOException $e) {
            die("Error al registrar usuario: " . $e->getMessage());
        }
    }
}
?>
