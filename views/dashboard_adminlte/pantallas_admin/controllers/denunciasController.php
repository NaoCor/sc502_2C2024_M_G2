<?php
require_once '../models/denunciasModel.php'; 

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $denuncia = new Denuncia();
        $denuncias = $denuncia->listarTodas();
        $data = array();
        foreach ($denuncias as $reg) {
            $data[] = array(
                "0" => $reg->getIdDenuncia(),
                "1" => $reg->getIdDenunciado(), 
                "2" => $reg->getIdDenunciante(), 
                "3" => $reg->getTipo(),
                "4" => $reg->getFecha(),
                "5" => $reg->getLugar(),
                "6" => $reg->getRelacionAgresor(),
                "7" => $reg->getDocumentacion(),
                "8" => $reg->getEstado() ? 'Activado' : 'Desactivado', 
                "9" =>
                    '<button class="btn btn-danger" onclick="eliminar(\'' . $reg->getIdDenuncia() . '\')">Eliminar</button>' .
                    '<button class="btn btn-success activar" onclick="cambiarEstado(' . $reg->getIdDenuncia() . ', true)">Activar</button>' .
                    '<button class="btn btn-danger desactivar" onclick="cambiarEstado(' . $reg->getIdDenuncia() . ', false)">Desactivar</button>'
            );
        }
        $resultados = array(
            "sEcho" => 1, 
            "iTotalRecords" => count($data), 
            "iTotalDisplayRecords" => count($data), 
            "aaData" => $data
        );
        echo json_encode($resultados);
    break;    

    case 'eliminar':
        $id = isset($_POST['idDenuncia']) ? trim($_POST['idDenuncia']) : "";
        $denuncia = new Denuncia();
        $denuncia->setIdDenuncia($id);
        $rspta = $denuncia->eliminarDenuncia();
        echo $rspta;
    break;

    case 'cambiar_estado':
        $id = isset($_POST['idDenuncia']) ? trim($_POST['idDenuncia']) : "";
        $estado = isset($_POST['estado']) ? (bool)$_POST['estado'] : false;
        $denuncia = new Denuncia();
        $denuncia->setIdDenuncia($id);
        $rspta = $denuncia->cambiarEstado($estado);
        echo json_encode(['success' => $rspta]);
    break;
    
}
?>
