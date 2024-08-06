<?php
require_once '../models/DenunciasModel.php';

if (isset($_GET['op']) && $_GET['op'] == 'listar_denuncias') {
    $denunciasModel = new DenunciasModel();
    $result = $denunciasModel->listarDenuncias();
    
    $data = [];
    foreach ($result as $row) {
        $data[] = [
            $row['id_denuncia'],
            $row['id_denunciado'],
            $row['id_denunciante'],
            $row['tipo'],
            $row['fecha'],
            $row['lugar'],
            $row['relacion_agresor'],
            $row['documentacion'],
            '<button class="btn btn-success" onclick="activarDenuncia(' . $row['id_denuncia'] . ')">Activar</button>
            <button class="btn btn-warning" onclick="desactivarDenuncia(' . $row['id_denuncia'] . ')">Desactivar</button>´
            
        ];
    }

    $response = [
        "sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
        "aaData" => $data
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response);
}

        }
        }

?>
