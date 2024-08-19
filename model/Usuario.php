<?php
require_once '../config/Conexion.php';

class Usuario {
    private $conn;

    public function __construct() {
        $this->conn = Conexion::conectar();
    }

    public function validarUsuario($correo, $contrasena) {
        $sql = "SELECT * FROM usuario WHERE correo = :correo AND contrasena = :contrasena";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
