<?php
require_once '../config/Conexion.php';

class DenunciasModel extends Conexion {
    public function listarDenuncias() {
        $query = "SELECT * FROM denunciasModel"; // Ajusta según el nombre y estructura de tu tabla
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
