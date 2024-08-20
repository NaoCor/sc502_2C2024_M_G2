<?php
    require_once '../model/ReservaModel.php';
    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $cedula = (isset($_POST["cedula"])) ? $_POST["cedula"] : "";
    $apellido = (isset($_POST["apellido"])) ? $_POST["apellido"] : "";
    $correo = (isset($_POST["email"])) ? $_POST["email"] : "";
    $entradas = (isset($_POST["entrada"])) ? $_POST["entrada"] : "";
    $total=   (isset($_POST["total"])) ? $_POST["total"] : "";
    $metodoPago=(isset($_POST["metodo"])) ? $_POST["metodo"] : "";
    $idCharla= (isset($_POST["charla"])) ? $_POST["charla"] : "";


    $reserva = new ReservaModel();

    $reserva->setidCharla($idCharla);
    $reserva->setcedula($cedula);
    $reserva->setentradas($entradas);
    $reserva->settotal($total);
    $reserva->setmetodo($metodoPago);
    $reserva->setnombre($nombre);
    $reserva->setcorreo($correo);
    $reserva->setprimerApellido($apellido);





    try {
        $reserva->guardar();
        $resp = array("exito"=> true,"msg"=>"insertada correctamente");
        echo json_encode($resp);
    } catch (PDOException $th) {
        $resp = array("exito"=> false,"msg"=>"Se presento un error");
        echo json_encode($resp);
    }

  
?>