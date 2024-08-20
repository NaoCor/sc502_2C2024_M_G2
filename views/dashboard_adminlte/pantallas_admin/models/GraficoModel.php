<?php
require_once '../../../../config/Conexion.php';

class graficoReservaModel extends Conexion {
    protected static $cnx;

    public function __construct() {}

    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function cargarGrafico() {
        try {
            self::getConexion();

            $query = "SELECT 
                        R.nombre, 
                        COUNT(R.idReserva) AS total_reservas
                    FROM 
                        reserva R
                    GROUP BY 
                        R.nombre
                    ORDER BY 
                        total_reservas DESC;";

            $stmt = self::$cnx->prepare($query);
            $stmt->execute();
            self::desconectar();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo 'Error al cargar reservas: ' . $e->getMessage();
            return false;
        }
    }
}

?>