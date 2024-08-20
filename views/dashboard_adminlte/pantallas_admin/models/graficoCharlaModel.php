<?php
require_once '../../../../config/Conexion.php';

class graficoCharlaModel extends Conexion {
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
                        C.tipo, 
                        COUNT(C.idCharla) AS total_charlas
                    FROM 
                        charla C
                    GROUP BY 
                        C.tipo
                    ORDER BY 
                        total_charlas DESC;";

            $stmt = self::$cnx->prepare($query);
            $stmt->execute();
            self::desconectar();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo 'Error al cargar charlas: ' . $e->getMessage();
            return false;
        }
    }
}

?>