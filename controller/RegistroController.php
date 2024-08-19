<?php
require_once '../model/Registro.php'; 

class RegistroController {
    private $registro;

    public function __construct() {
        $this->registro = new Registro();
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $primer_apellido = $_POST['primer_apellido'];
            $segundo_apellido = $_POST['segundo_apellido'];
            $correo = $_POST['correo'];
            $numero_telefonico = $_POST['numero_telefonico'];
            $contrasena = $_POST['contrasena'];

            if ($this->registro->correoExiste($correo)) {
                echo "<script>alert('El correo electrónico ya está registrado.'); window.history.back();</script>";
            } else {
                $resultado = $this->registro->registrarUsuario($nombre, $primer_apellido, $segundo_apellido, $correo, $numero_telefonico, $contrasena);
                if ($resultado) {
                    header("Location: ../views/inicioSesion.php"); 
                    exit();
                } else {
                    echo "Error al registrar el usuario.";
                }
            }
        } else {
            echo "Método de solicitud no permitido.";
        }
    }
}

$controller = new RegistroController();
$controller->registrar();
?>
