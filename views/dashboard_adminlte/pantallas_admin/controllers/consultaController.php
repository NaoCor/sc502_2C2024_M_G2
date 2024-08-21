<?php
session_start();
$idUsuario = isset($_SESSION['idUsuario']) ? $_SESSION['idUsuario'] : null;

require_once '../models/consultaModel.php';
require_once '../models/respuestaModel.php';

$op = isset($_GET['op']) ? $_GET['op'] : '';

switch ($op) {
    case 'listar_para_tabla':
        $consulta = new ConsultaModel();
        $resultados = $consulta->listarTodosConRespuestas();

        $data = array();
        foreach ($resultados as $reg) {
            $data[] = array(
                "0" => $reg['idConsulta'],
                "1" => $reg['idUsuario'],
                "2" => $reg['pregunta'],
                "3" => ($reg['estado'] == 1) 
                    ? '<span class="label bg-success">Activado</span>' 
                    : '<span class="label bg-danger">Desactivado</span>',
                "4" => ($reg['estado']) 
                    ? '<button class="btn btn-warning" onclick="responder(\''.$reg['idConsulta'].'\')">Responder</button> ' .
                      '<button class="btn btn-danger" onclick="desactivar(\''.$reg['idConsulta'].'\')">Desactivar</button>'
                    : '<button class="btn btn-success" onclick="activar(\''.$reg['idConsulta'].'\')">Activar</button>',
                "5" => $reg['respuesta'] ? $reg['respuesta'] : 'Sin respuesta'
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

    case 'activar':
        if (isset($_POST['idConsulta'])) {
            $consulta = new ConsultaModel();
            $consulta->setIdConsulta(trim($_POST['idConsulta']));
            $rspta = $consulta->activarConsulta($consulta->getIdConsulta());
            echo $rspta ? '1' : '0';
        } else {
            echo "Error: idConsulta no definido.";
        }
    break;
    
    case 'desactivar':
        if (isset($_POST['idConsulta'])) {
            $consulta = new ConsultaModel();
            $consulta->setIdConsulta(trim($_POST['idConsulta']));
            $rspta = $consulta->desactivarConsulta($consulta->getIdConsulta());
            echo $rspta ? '1' : '0';
        } else {
            echo "Error: idConsulta no definido.";
        }
    break;

    case 'responder':
        if (isset($_POST['idConsulta']) && isset($_POST['respuesta'])) {
            if ($idUsuario !== null) { 
                $respuesta = new RespuestaModel();
                $idConsulta = trim($_POST['idConsulta']);
                $respuestaTexto = trim($_POST['respuesta']);
                $rspta = $respuesta->guardar($idUsuario, $idConsulta, $respuestaTexto);
                echo $rspta ? '1' : '0';
            } else {
                echo "Error: Usuario no autenticado.";
            }
        } else {
            echo "Error: idConsulta o respuesta no definido.";
        }
    break;
}
?>