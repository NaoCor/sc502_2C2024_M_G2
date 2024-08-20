<?php
require_once '../models/graficoCharlaModel.php';

$grafico = new graficoCharlaModel();
$datos = $grafico->cargarGrafico(); 

$data = array();
$labels = array();
$values = array();

foreach ($datos as $reg) {
    $labels[] = $reg['tipo'];
    $values[] = $reg['total_charlas']; 
}

$datos = array(
    "labels" => $labels,
    "data" => $values
);

echo json_encode($datos);

?>