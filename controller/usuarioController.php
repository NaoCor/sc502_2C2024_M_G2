<?php
    require_once '../model/Usuario.php';
    $correo = (isset($_POST["username"])) ? $_POST["username"] : "";
    $contraseña = (isset($_POST["password"])) ? $_POST["password"] : "";
    echo($correo);
    $usuario = new Usuario();
    $usuario ->setcorreo('corellanaomi@gmail.com');
    echo($usuario->getcorreo());
   
    try {
        $usuario = new Usuario();
        $usuario ->setcorreo('corellanaomi@gmail.com');
        // echo($usuario->getcorreo());
        $datos_usuario = $usuario->login();
   
    
        if ($datos_usuario['correo'] == 'corellanaomi@gmail.com') {
          // echo json_encode($datos_usuario['correo']);
        } else {
           // echo('login no hecho');

        }

      
    
    } catch (PDOException $th) {
        $resp = array("exito" => false, "msg" => "Se presento un error");
        echo json_encode($resp);
    }
    

    // para un solo campo
 //   $resp = array(
   //     "idUsuario" => $datos_usuario['idUsuario']
   // );