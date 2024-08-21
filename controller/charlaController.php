<?php
    require_once '../model/CharlaModel.php';
    $identificacion = (isset($_POST["identificacion"])) ? $_POST["identificacion"] : "";
    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $primerApellido = (isset($_POST["primerApellido"])) ? $_POST["primerApellido"] : "";
    $numero = (isset($_POST["numero"])) ? $_POST["numero"] : "";
    $correo = (isset($_POST["correo"])) ? $_POST["correo"] : "";

    //Charla
    $nombreCharla = (isset($_POST["nombreCharla"])) ? $_POST["nombreCharla"] : "";
    $lugar = (isset($_POST["lugar"])) ? $_POST["lugar"] : "";
    $fecha  = (isset($_POST["fecha"])) ? $_POST["fecha"] : "";
    $hora   = (isset($_POST["hora"])) ? $_POST["hora"] : "";
    $costo  = (isset($_POST["costo"])) ? $_POST["costo"] : "";
    $tipo  = (isset($_POST["tipo"])) ? $_POST["tipo"] : "";
    $duracion  = (isset($_POST["duracion"])) ? $_POST["duracion"] : "";
    $formato = (isset($_POST["formato"])) ? $_POST["formato"] : "";
    $objetivo = (isset($_POST["objetivo"])) ? $_POST["objetivo"] : "";
    $descripcionCorta = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
    $consiste = (isset($_POST["consiste"])) ? $_POST["consiste"] : "";
    $poster = (isset($_POST["poster"])) ? $_POST["poster"] : "";



    //Sets de Presentador
    $charla = new CharlaModel();
    $charla->setNombre($nombre);
    $charla->setprimerApellido($primerApellido);
    $charla->setnumero($numero);
    $charla->setcorreo($correo);
    $charla->setIdPresentador($identificacion);

    //sets Charla

    $charla->setNombreCharla($nombreCharla);
    $charla->setlugar($lugar);
    $charla->setfecha($fecha);
    $charla->sethora($hora);
    $charla->setcosto($costo);
    $charla->settipo($tipo);
    $charla->setduracion($duracion);
    $charla->setformato($formato);
    $charla->setobjetivo($objetivo);
    $charla->setdescripcion($descripcionCorta);
    $charla->setconsiste($consiste);
 

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