<?php
require_once '../model/consultaModel.php';
session_start(); 
if (!isset($_SESSION['idUsuario'])) {
    $resp = array("exito" => false, "msg" => "Usuario no autenticado.");
    header('Content-Type: application/json');
    echo json_encode($resp);
    exit;
}

$idUsuario = $_SESSION['idUsuario'];
$pregunta = isset($_POST["question"]) ? trim($_POST["question"]) : "";

// Validar la pregunta
if (empty($pregunta)) {
    $resp = array("exito" => false, "msg" => "La pregunta no puede estar vacía.");
    header('Content-Type: application/json');
    echo json_encode($resp);
    exit;
}

$consulta = new consultaModel();
$consulta->setPregunta($pregunta);
$consulta->setIdUsuario($idUsuario);

header('Content-Type: application/json');

try {
    $resultado = $consulta->guardarconOO();
    echo $resultado;
} catch (Exception $e) {
    $resp = array("exito" => false, "msg" => "Error al enviar la pregunta: " . $e->getMessage());
    echo json_encode($resp);
}
?>

