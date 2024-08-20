<?php
require_once '../model/Usuario.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuario();
    }

    public function login($correo, $contrasena) {
        $resultado = $this->usuarioModel->validarUsuario($correo, $contrasena);

        if ($resultado) {
            session_start();
            $_SESSION['idUsuario'] = $resultado['idUsuario'];
            $_SESSION['nombre'] = $resultado['nombre'];
            $_SESSION['idRol'] = $resultado['idRol'];
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Credenciales inválidas']);
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../views/inicioSesion.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
    $usuarioController = new UsuarioController();
    $usuarioController->login($correo, $contrasena);
}

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $usuarioController = new UsuarioController();
    $usuarioController->logout();
}
