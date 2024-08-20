<?php
require_once '../models/GraficoDenunciasModel.php';

$op = $_GET['op'];

switch ($op) {
    case 'cargar_grafico':
        $modelo = new graficoModel();
        
        $datos = $modelo->cargarGrafico();
        
        if ($datos !== false) {
            echo json_encode($datos);
        } else {
            echo json_encode(['error' => 'No se pudieron obtener los datos']);
        }
        break;

    default:
        echo "Operación no válida";
        break;
}
?>