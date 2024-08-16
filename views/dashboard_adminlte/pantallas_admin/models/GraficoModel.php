<?php
 require_once '../../../../config/Conexion.php';
    class graficoReservaModel extends Conexion {
        /*=============================================
        =            Atributos de la Clase            =
        =============================================*/
        protected static $cnx;
        /*=====  End of Atributos de la Clase  ======*/

        /*=============================================
        =            Contructores de la Clase          =
        =============================================*/
        public function __construct() {
        }
        /*=====  End of Contructores de la Clase  ======*/

        /*=============================================
        =            Metodos de la Clase              =
        =============================================*/
        public static function getConexion(){
            self::$cnx = Conexion::conectar();
        }

        public static function desconectar(){
            self::$cnx = null;
        }

        //Codigo para cargar el Select de productos
        public function cargarGrafico() {
            try {
                self::getConexion();
       
                $query = "SELECT 
                C.nombreCharla, 
                COUNT(R.idReserva) AS total_reservas
            FROM 
                reserva R 
            INNER JOIN 
                charla C 
            ON 
                R.idCharla = C.idCharla
            GROUP BY 
                C.nombreCharla
            ORDER BY 
                total_reservas DESC;";
            
                $stmt = self::$cnx->prepare($query);
                $stmt->execute();
                self::desconectar();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch(PDOException $e) {
                echo 'Error al cargar ventas: ' . $e->getMessage();
                return false;
            }
        }

    }



?>