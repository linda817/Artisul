<?php
require_once ('../funciones/bd.php');

class Marcas
{
    public $idMarca;
    public $nombreMarca;
    public $estadoMarca;
    public $fechaRegistro;

    /**
     * Marcas constructor.
     * @param $idMarca
     * @param $nombreMarca
     * @param $estadoMarca
     */
    public function __construct($idMarca = 0, $nombreMarca = '', $estadoMarca = 0)
    {
        $this->idMarca = $idMarca;
        $this->nombreMarca = $nombreMarca;
        $this->estadoMarca = $estadoMarca;
    }

    function insertar() {
        $fechaRegistro = date("Y-m-d H:i:s");
        $query = "insert into productos_marcas (nombreMarca, estadoMarca, fechaRegistro)
                  values ('".$this->nombreMarca."', ".$this->estadoMarca.", '".$fechaRegistro."');
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }

    function obtener() {
        $query = "select * from productos_marcas";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function listadoCombo() {
        $query = "select * from productos_marcas where estadoMarca = 1";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function obtenerInfo($idMarca) {
        $query = "select * from productos_marcas where idMarca = ".$idMarca;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;
    }

    function actualizar() {
        $query = "update productos_marcas set
                  nombreMarca = '$this->nombreMarca',
                  estadoMarca = '$this->estadoMarca'
                  where idMarca = ".$this->idMarca."
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }


}