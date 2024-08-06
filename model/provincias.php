<?php
require_once '../config/Conexion.php';

try {
    $cn = Conexion::conectar();
    $sql = "SELECT * FROM Provincia";
    $stmt = $cn->prepare($sql);
    $stmt->execute();

    $provincias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($provincias);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
