<?php
require_once ('../funciones/bd.php');

class Categoria
{
    public $idCategoria;
    public $nombreCategoria;
    public $estadoCategoria;
    public $fechaRegistro;

    /**
     * Categoria constructor.
     * @param $idCategoria
     * @param $nombreCategoria
     * @param $estadoCategoria
     */
    public function __construct($idCategoria = 0, $nombreCategoria = '', $estadoCategoria = 0)
    {
        $this->idCategoria = $idCategoria;
        $this->nombreCategoria = $nombreCategoria;
        $this->estadoCategoria = $estadoCategoria;
    }


    function insertar() {
        $fechaRegistro = date("Y-m-d H:i:s");
        $query = "insert into productos_categorias (nombreCategoria, estadoCategoria, fechaRegistro)
                  values ('".$this->nombreCategoria."', ".$this->estadoCategoria.", '".$fechaRegistro."');
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }

    function obtener() {
        $query = "select * from productos_categorias";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function listadoCombo() {
        $query = "select * from productos_categorias where estadoCategoria = 1";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function obtenerInfo($idCategoria) {
        $query = "select * from productos_categorias where idCategoria = ".$idCategoria;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;
    }

    function actualizar() {
        $query = "update productos_categorias set
                  nombreCategoria = '$this->nombreCategoria',
                  estadoCategoria = '$this->estadoCategoria'
                  where idCategoria = ".$this->idCategoria."
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }


}