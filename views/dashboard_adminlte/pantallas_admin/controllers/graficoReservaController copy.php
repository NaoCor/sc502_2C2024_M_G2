<?php
require_once '../models/GraficoModel.php';

$grafico = new graficoReservaModel();
$datos = $grafico->cargarGrafico(); 

$data = array();
$labels = array();
$values = array();

foreach ($datos as $reg) {
    $labels[] = $reg['nombre'];
    $values[] = $reg['total_reservas']; 
}

$datos = array(
    "labels" => $labels,
    "data" => $values
);

echo json_encode($datos);


?>