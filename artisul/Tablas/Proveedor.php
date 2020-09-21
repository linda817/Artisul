<?php
require_once ('../funciones/bd.php');

class Proveedor
{
    public $idProveedor;
    public $nombreProveedor;
    public $estadoProveedor;
    public $fechaRegitro;

    /**
     * Proveedor constructor.
     * @param $idProveedor
     * @param $nombreProveedor
     * @param $estadoProveedor
     */
    public function __construct($idProveedor = 0, $nombreProveedor = '', $estadoProveedor = 0)
    {
        $this->idProveedor = $idProveedor;
        $this->nombreProveedor = $nombreProveedor;
        $this->estadoProveedor = $estadoProveedor;
    }

//funciones para la base de datos//

    function insertar() {
        $fechaRegistro = date("Y-m-d H:i:s");
        $query = "insert into productos_proveedores (nombreProveedor, estadoProveedor, fechaRegistro)
                  values ('".$this->nombreProveedor."', ".$this->estadoProveedor.", '".$fechaRegistro."');
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }

    function obtener() {
        $query = "select * from productos_proveedores ";
        $sql = fn_EjecutarQuery($query);

        $datos = array();
        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function listadoCombo() {
        $query = "select * from productos_proveedores  where estadoProveedor = 1";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function obtenerInfo($idProveedor) {
        $query = "select * from productos_proveedores  where idProveedor =".$idProveedor;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;
    }

    function actualizar() {
        $query = "update productos_proveedores  set
                  nombreProveedor = '$this->nombreProveedor',
                  estadoProveedor = '$this->estadoProveedor'
                  where idProveedor = ".$this->idProveedor."
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }
}