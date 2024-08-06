<?php
require_once '../models/LugarSeguro.php'; 

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $lugarSeguro = new LugarSeguro();
        $lugaresSeguros = $lugarSeguro->listarTodosDb();
        $data = array();
        foreach ($lugaresSeguros as $reg) {
            $iframeUrl = $reg->getIframe();
            
            if (preg_match('/src="([^"]+)"/', $iframeUrl, $matches)) {
                $iframeUrl = $matches[1];
                $maxLength = 20;
                if (strlen($iframeUrl) > $maxLength) {
                    $iframeUrl = substr($iframeUrl, 0, $maxLength) . '...'; 
                }
            } else {
                $iframeUrl = $iframeUrl;
                $maxLength = 20;
                if (strlen($iframeUrl) > $maxLength) {
                    $iframeUrl = substr($iframeUrl, 0, $maxLength) . '...'; 
                }
            }
    
            $data[] = array(
                "0" => $reg->getId(),
                "1" => $reg->getNombre(),
                "2" => $reg->getDireccion(),
                "3" => $iframeUrl, 
                "4" => $reg->getDatosContacto(),
                "5" => $reg->getIdProvincia(),
                "6" =>
                    '<button class="btn btn-danger" onclick="eliminar(\''.$reg->getId().'\')">Eliminar</button>'
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
        $id = isset($_POST['idLugarSeguro']) ? trim($_POST['idLugarSeguro']) : "";
        $lugarSeguro = new LugarSeguro();
        $lugarSeguro->setId($id);
        $rspta = $lugarSeguro->eliminarLugarSeguro();
        echo $rspta;
    break;
}
?>
