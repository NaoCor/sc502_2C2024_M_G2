<?php
    require_once '../model/CharlaModel.php';
    $identificacion = (isset($_POST["identificacion"])) ? $_POST["identificacion"] : "";
    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $numero = (isset($_POST["numero"])) ? $_POST["numero"] : "";
    $correo = (isset($_POST["correo"])) ? $_POST["correo"] : "";
    
    $nombreCharla = (isset($_POST["nombreCharla"])) ? $_POST["nombreCharla"] : "";
    $fecha = (isset($_POST["fecha"])) ? $_POST["fecha"] : "";
    $hora = (isset($_POST["hora"])) ? $_POST["hora"] : "";
    $costo = (isset($_POST["costo"])) ? $_POST["costo"] : "";
   // $lugar = (isset($_POST["lugar"])) ? $_POST["lugar"] : "";
    $tipo = (isset($_POST["tipo"])) ? $_POST["tipo"] : "";
    $formato = (isset($_POST["formato"])) ? $_POST["formato"] : "";
    $objetivo = (isset($_POST["objetivo"])) ? $_POST["objetivo"] : "";
    $descripcion = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
    $consiste = (isset($_POST["consiste"])) ? $_POST["consiste"] : "";
    $poster = (isset($_POST["poster"])) ? $_POST["poster"] : "";
    $duracion = (isset($_POST["duracion"])) ? $_POST["duracion"] : "";
    $charla = new CharlaModel();
    $charla->setNombre($nombre);
    $charla->setnumero($numero);
    $charla->setcorreo($correo);
    $charla->setIdPresentador($identificacion);

    $charla->setNombreCharla($nombreCharla);
    $charla->setfecha($fecha);
    $charla->sethora($hora);
    $charla->setcosto($costo);
    $charla->settipo($tipo);
    $charla->setformato($formato);
    $charla->setobjetivo($objetivo);
    $charla->setdescripcion($descripcion);
    $charla->setconsiste($consiste);
    $charla->setposter($poster);
    $charla->setduracion($duracion);
    try {
        $charla->guardarPresentador();
        $charla->guardarCharla();
        $resp = array("exito"=> true,"msg"=>"insertada correctamente");
        echo json_encode($resp);
    } catch (PDOException $th) {
        $resp = array("exito"=> false,"msg"=>"Se presento un error");
        echo json_encode($resp);
    }


?>