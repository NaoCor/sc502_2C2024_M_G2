<?php
require_once '../models/Usuario.php';

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $user_login = new Usuario();
        $usuarios = $user_login->listarTodosDb();
        $data = array();
        foreach ($usuarios as $reg) {
            $imagen = ($reg->getFoto() != '' && $reg->getFoto() != null)
                ? './assets/images/profiles/' . $reg->getFoto()
                : './assets/images/profiles/' . 'user-160x160.jpg';

            $data[] = array(
                "0" => $reg->getIdUsuario(),
                "1" => $reg->getCorreo(),
                "2" => $reg->getNombre(),
                "3" => $reg->getPrimerApellido(),
                "4" => $reg->getSegundoApellido(),
                "5" => '<img src="' . $imagen . '" width="50px" height="50px"/>',
                "6" => $reg->getNumeroTelefonico(),
                "7" => $reg->getIdRol(),
                "8" => ($reg->getEstado() == 1) ? '<span class="label bg-success"> Activado </span>' : '<span class="label bg-danger"> Desactivado </span>',
                "9" => ($reg->getEstado() == 1) ? 
                    '<button class="btn btn-danger" onclick="desactivar(\'' . $reg->getIdUsuario() . '\')">Desactivar</button>' :
                    '<button class="btn btn-success" onclick="activar(\'' . $reg->getIdUsuario() . '\')">Activar</button>'
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

    case 'insertar':
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
        $primer_apellido = isset($_POST["primer_apellido"]) ? trim($_POST["primer_apellido"]) : "";
        $segundo_apellido = isset($_POST["segundo_apellido"]) ? trim($_POST["segundo_apellido"]) : "";
        $foto = isset($_POST["foto"]) ? trim($_POST["foto"]) : "";
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";
        $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : "";
        $idRol = isset($_POST["idRol"]) ? trim($_POST["idRol"]) : "";
        $estado = isset($_POST["estado"]) ? trim($_POST["estado"]) : 1;

        $clavehash = hash('SHA256', trim($contrasena));
        $usuario = new Usuario();
        $usuario->setCorreo($correo);
        $encontrado = $usuario->verificarExistenciaDb();
        if (!$encontrado) {
            $usuario->setNombre($nombre);
            $usuario->setPrimerApellido($primer_apellido);
            $usuario->setSegundoApellido($segundo_apellido);
            $usuario->setContrasena($clavehash); 
            $usuario->setFoto($foto);
            $usuario->setNumeroTelefonico($telefono);
            $usuario->setIdRol($idRol);
            $usuario->setEstado($estado);
            $usuario->guardarEnDb();
            if ($usuario->verificarExistenciaDb()) {
                echo 1; 
            } else {
                echo 3; 
            }
        } else {
            echo 2;
        }
        break;

    case 'activar':
        if (isset($_POST['idUsuario'])) {
            $usuario = new Usuario();
            $usuario->setIdUsuario(trim($_POST['idUsuario']));
            $rspta = $usuario->activar();
            echo $rspta;
        } else {
            echo 0; 
        }
        break;

    case 'desactivar':
        if (isset($_POST['idUsuario'])) {
            $usuario = new Usuario();
            $usuario->setIdUsuario(trim($_POST['idUsuario']));
            $rspta = $usuario->desactivar();
            echo $rspta;
        } else {
            echo 0; 
        }
        break;

    case 'editar':
        $id = isset($_POST["id"]) ? trim($_POST["id"]) : "";
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
        $primer_apellido = isset($_POST["primer_apellido"]) ? trim($_POST["primer_apellido"]) : "";
        $segundo_apellido = isset($_POST["segundo_apellido"]) ? trim($_POST["segundo_apellido"]) : "";
        $foto = isset($_POST["foto"]) ? trim($_POST["foto"]) : "";
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";
        $idRol = isset($_POST["idRol"]) ? trim($_POST["idRol"]) : "";

        if ($id != "") {
            $usuario = new Usuario();
            $usuario->setCorreo($correo);
            $encontrado = $usuario->verificarExistenciaDb();
            if ($encontrado) {
                $usuario->llenarCampos($id);
                $usuario->setIdUsuario($id);
                $usuario->setNombre($nombre);
                $usuario->setPrimerApellido($primer_apellido);
                $usuario->setSegundoApellido($segundo_apellido);
                $usuario->setFoto($foto);
                $usuario->setNumeroTelefonico($telefono);
                $usuario->setIdRol($idRol);
                $modificados = $usuario->actualizarUsuario();
                if ($modificados > 0) {
                    echo 1; 
                } else {
                    echo 0; 
                }
            } else {
                echo 2; 
            }
        } else {
            echo 0; 
        }
        break;

    case 'mostrar':
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
        $usuario = new Usuario();
        $usuario->setCorreo($correo);
        $encontrado = $usuario->mostrar($correo);
        if ($encontrado != null) {
            $arr = array(
                "idUsuario" => $encontrado['idUsuario'],
                "nombre" => $encontrado['nombre'],
                "primer_apellido"  => $encontrado['primer_apellido'],
                "segundo_apellido" => $encontrado['segundo_apellido'],
                "correo" => $encontrado['correo']
            );
            echo json_encode($arr);
        } else {
            echo 0;
        }
        break;
}
?>
