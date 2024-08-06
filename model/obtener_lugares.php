<?php
require_once '../config/Conexion.php';

if (isset($_GET['provinciaId'])) {
    $provinciaId = intval($_GET['provinciaId']);
    
    try {
        $cn = Conexion::conectar();
        
        $sql = 'SELECT idLugarSeguro, nombre, iframe FROM LugaresSeguros WHERE idProvincia = :provinciaId';
        $stmt = $cn->prepare($sql);
        $stmt->bindParam(':provinciaId', $provinciaId, PDO::PARAM_INT);
        $stmt->execute();
        
        $lugares = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        header('Content-Type: application/json');
        
        echo json_encode($lugares);
    } catch (PDOException $ex) {
        header('Content-Type: application/json');
        echo json_encode(['error' => $ex->getMessage()]);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'No se ha especificado el parámetro provinciaId']);
}
?>
