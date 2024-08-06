<?php

require_once '../model/denunciasModel.php';

//Guardar Denunciante
$nombre_denunciante = isset($_POST["nombre_denunciante"]) ? $_POST["nombre_denunciante"] : "";
$primer_apellido_denunciante = isset($_POST["primer_apellido_denunciante"]) ? $_POST["primer_apellido_denunciante"] : "";
$segundo_apellido_denunciante = isset($_POST["segundo_apellido_denunciante"]) ? $_POST["segundo_apellido_denunciante"] : "";
$correo_denunciante = isset($_POST["correo_denunciante"]) ? $_POST["correo_denunciante"] : "";
$telefono_denunciante = isset($_POST["telefono_denunciante"]) ? $_POST["telefono_denunciante"] : "";

$denunciante = new DenunciasModel();
$denunciante->setNombre_denunciante($nombre_denunciante);
$denunciante->setPrimer_apellido_denunciante($primer_apellido_denunciante);
$denunciante->setSegundo_apellido_denunciante($segundo_apellido_denunciante);
$denunciante->setCorreo_denunciante($correo_denunciante);
$denunciante->setTelefono_denunciante($telefono_denunciante);

try {
    $denunciante->guardarDenunciante();
    $resp = array("exito" => true, "msg" => "Denunciante insertado correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito" => false, "msg" => "Se presentó un error: " . $th->getMessage());
    echo json_encode($resp);
}

//Guardar Denunciado
$nombre_denunciado = isset($_POST["nombre_denunciado"]) ? $_POST["nombre_denunciado"] : "";
$primer_apellido_denunciado = isset($_POST["primer_apellido_denunciado"]) ? $_POST["primer_apellido_denunciado"] : "";
$segundo_apellido_denunciado = isset($_POST["segundo_apellido_denunciado"]) ? $_POST["segundo_apellido_denunciado"] : "";

$denunciado = new DenunciasModel();
$denunciado->setNombre_denunciado($nombre_denunciado);
$denunciado->setPrimer_apellido_denunciado($primer_apellido_denunciado);
$denunciado->setSegundo_apellido_denunciado($segundo_apellido_denunciado);

try {
    $denunciado->guardarDenunciado();
    $resp = array("exito" => true, "msg" => "Denunciado insertado correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito" => false, "msg" => "Se presentó un error: " . $th->getMessage());
    echo json_encode($resp);
}

//Guardar Denuncia
$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
$fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : "";
$lugar = isset($_POST["lugar"]) ? $_POST["lugar"] : "";
$relacion_agresor = isset($_POST["relacion_agresor"]) ? $_POST["relacion_agresor"] : "";
$documentacion = isset($_POST["documentacion"]) ? $_POST["documentacion"] : "";

$denuncia = new DenunciasModel();
$denuncia->setTipo($tipo);
$denuncia->setFecha($fecha);
$denuncia->setLugar($lugar);
$denuncia->setRelacion_agresor($relacion_agresor);
$denuncia->setDocumentacion($documentacion);

try {
    $denuncia->guardarDenuncia();
    $resp = array("exito" => true, "msg" => "Denuncia insertada correctamente");
    echo json_encode($resp);
} catch (\Throwable $th) {
    $resp = array("exito" => false, "msg" => "Se presentó un error: " . $th->getMessage());
    echo json_encode($resp);
}
?>
