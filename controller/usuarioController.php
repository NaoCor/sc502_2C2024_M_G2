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
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Credenciales inválidas']);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
    $usuarioController = new UsuarioController();
    $usuarioController->login($correo, $contrasena);
}
?>
