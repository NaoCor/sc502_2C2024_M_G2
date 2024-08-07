<?php
require_once '../config/Conexion.php';

try {
    $conn = Conexion::conectar();
    
    // Consulta para seleccionar las denuncias con estado true (1)
    $sql = 'SELECT idDenuncia, fecha, lugar, relacion_agresor FROM Denuncia WHERE estado = 1';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $denuncias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo json_encode($denuncias);
} catch (PDOException $e) {
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
}
?>
