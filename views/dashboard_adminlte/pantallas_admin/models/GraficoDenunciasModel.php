<?php
require_once '../../../../config/Conexion.php';

class graficoModel extends Conexion {

    protected static $cnx;
 

    public function __construct() {
    }
 

  
    public static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }

    public function cargarGrafico() {
        try {
            self::getConexion();
            
            $sql = "SELECT tipo, COUNT(*) as cantidad
                    FROM denuncia
                    WHERE estado = 1
                    GROUP BY tipo";
                    
            $stmt = self::$cnx->prepare($sql);
            $stmt->execute();
            
            self::desconectar();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo 'Error al cargar los datos para el gráfico: ' . $e->getMessage();
            return false;
        }
    }
}
?>