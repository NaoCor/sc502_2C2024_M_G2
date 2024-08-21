<?php
require_once '../../../../config/Conexion.php';

class Charla extends Conexion
{
    protected static $cnx;
    private $idCharla = null;
    private $nombreCharla = null;
    private $fecha = null;
    private $hora = null;
    private $costo = null;
    private $tipo = null;
    private $duracion = null;
    private $formato = null;
    private $objetivo = null;
    private $descripcionCorta = null;
    private $consiste = null;
    private $foto = null;

    public function getidCharla() {
        return $this->idCharla;
    }

    public function getnombreCharla() {
        return $this->nombreCharla;
    }

    public function getfecha() {
        return $this->fecha;
    }

    public function gethora() {
        return $this->hora;
    }

    public function getcosto() {
        return $this->costo;
    }


    public function gettipo() {
        return $this->tipo;
    }

    public function getduracion() {
        return $this->duracion;
    }

    public function getformato() {
        return $this->formato;
    }

    public function getobjetivo() {
        return $this->objetivo;
    }

    public function getdescripcionCorta() {
        return $this->descripcionCorta;
    }

    public function getconsiste() {
        return $this->consiste;
    }

    public function getfoto() {
        return $this->foto;
    }

    public function setidCharla($idCharla) {
        $this->idCharla = $idCharla;
    }

    public function setidPresentador($idPresentador) {
        $this->idPresentador = $idPresentador;
    }

    public function setnombreCharla($nombreCharla) {
        $this->nombreCharla = $nombreCharla;
    }

    public function setfecha($fecha) {
        $this->fecha = $fecha;
    }

    public function sethora($hora) {
        $this->hora = $hora;
    }

    public function setcosto($costo) {
        $this->costo = $costo;
    }


    public function settipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setduracion($duracion) {
        $this->duracion = $duracion;
    }

    public function setformato($formato) {
        $this->formato = $formato;
    }

    public function setobjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    public function setdescripcionCorta($descripcionCorta) {
        $this->descripcionCorta = $descripcionCorta;
    }

    public function setconsiste($consiste) {
        $this->consiste = $consiste;
    }

    public function setfoto($foto) {
        $this->foto = $foto;
    }

    public static function getConexion() {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar() {
        self::$cnx = null;
    }

    public function listarTodosDb() {
        $query = "SELECT * FROM charla ORDER BY idCharla;";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $charla = new Charla();
                $charla->setidCharla($encontrado['idCharla']);
                $charla->setnombreCharla($encontrado['nombreCharla']);
                $charla->setfecha($encontrado['fecha']);
                $charla->sethora($encontrado['hora']);
                $charla->setcosto($encontrado['costo']);
                $charla->settipo($encontrado['tipo']);
                $charla->setduracion($encontrado['duracion']);
                $charla->setformato($encontrado['formato']);
                $charla->setobjetivo($encontrado['objetivo']);
                $charla->setdescripcionCorta($encontrado['descripcionCorta']);
                $charla->setconsiste($encontrado['consiste']);
                $charla->setfoto($encontrado['foto']);

                $arr[] = $charla;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
}
?>
