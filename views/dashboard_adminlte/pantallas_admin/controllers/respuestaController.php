<?php
require_once '../models/respuestaModel.php';
session_start();

if (!isset($_SESSION['idUsuario']) || $_SESSION['idRol'] != 1) {
    echo json_encode(["exito" => false, "msg" => "Acceso denegado."]);
    exit;
}

$idConsulta = isset($_POST["idConsulta"]) ? filter_var($_POST["idConsulta"], FILTER_SANITIZE_NUMBER_INT) : null;
$respuesta = isset($_POST["respuesta"]) ? trim($_POST["respuesta"]) : "";

if (empty($respuesta) || $idConsulta === null) {
    echo json_encode(["exito" => false, "msg" => "Datos incompletos o inválidos."]);
    exit;
}

$respuestaModel = new respuestaModel();
$respuestaModel->setIdConsulta($idConsulta);
$respuestaModel->setIdUsuario($_SESSION['idUsuario']);
$respuestaModel->setRespuesta($respuesta);

header('Content-Type: application/json');

try {
    $resultado = $respuestaModel->guardarRespuesta();
    echo $resultado;
} catch (Exception $e) {
    echo json_encode(["exito" => false, "msg" => "Error: " . $e->getMessage()]);
}
?>
