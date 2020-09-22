<?php
require_once ('../funciones/bd.php');

class Producto {
    public $idProducto;
    public $nombreProducto;
    public $costoProducto;
    public $descripcionProducto;
    public $cantidadProducto;
    public $fechaRegistrol;
    public $idProveedor;
    public $idCategoria;
    public $idMarca;

//funciones para la base de datos//

    /**
     * Producto constructor.
     * @param $idProducto
     * @param $nombreProducto
     * @param $costoProducto
     * @param $descripcionProducto
     * @param $cantidadProducto
     * @param $idProveedor
     * @param $idCategoria
     * @param $idMarca
     */
    public function __construct($idProducto = 0, $nombreProducto = '', $costoProducto = 0, $descripcionProducto = '', $cantidadProducto = 0,
                                $idProveedor = 0, $idCategoria = 0, $idMarca = 0)
    {
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->costoProducto = $costoProducto;
        $this->descripcionProducto = $descripcionProducto;
        $this->cantidadProducto = $cantidadProducto;
        $this->idProveedor = $idProveedor;
        $this->idCategoria = $idCategoria;
        $this->idMarca = $idMarca;
    }


    function insertar(){
        $fechaRegistro = date("Y-m-d H:i:s");
        $query = "insert into productos (nombreProducto, costoProducto, descripcionProducto, cantidadProducto, fechaRegistro,
                  idProveedor, idCategoria, idMarca)
                  values ('".$this->nombreProducto."', '".$this->costoProducto."', '".$this->descripcionProducto."', '".$this->cantidadProducto."',
                        '".$fechaRegistro."', '".$this->idProveedor."','".$this->idCategoria."', '".$this->idMarca."');
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }

    function obtener() {
        $query = "select * from productos";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function listado() {
        $query = "select p.idProducto, p.nombreProducto, p.costoProducto, p.descripcionProducto, p.cantidadProducto,
                  pr.idProveedor, pr.nombreProveedor, 
                  m.idMarca, m.nombreMarca,
                  tp.idCategoria, tp.nombreCategoria
                  from productos p
                  inner join productos_proveedores pr on pr.idProveedor = p.idProveedor
                  inner join productos_marcas m on m.idMarca = p.idMarca
                  inner join productos_categorias tp on tp.idCategoria = p.idCategoria";
        $sql = fn_EjecutarQuery($query);

        $datos = array();
        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }
//NO TENEMOS ESTADO DE PRODUCTO ASI QUE NO SE QUE IRIA AQUI ENVEZ DE ESTO (ESTO LO HICIMOS EN CLASE)
//AYUDA//
    function listadoCombo() {
        $query = "select * from productos";
        $sql = fn_EjecutarQuery($query);

        while ( $sRow = fn_ExtraerQuery($sql) ){
            $datos[] = $sRow;
        }

        return $datos;
    }

    function obtenerInfo($idProducto) {
        $query = "select * from productos where idProducto =".$idProducto;
        $sql = fn_EjecutarQuery($query);

        $datos = fn_ExtraerQuery($sql);

        return $datos;
    }

    function actualizar() {
        $query = "update productos set
                  nombreProducto = '$this->nombreProducto',
                  costoProducto = '$this->costoProducto',
                  descripcionProducto = '$this->descripcionProducto',
                  cantidadProducto = '$this->cantidadProducto',
                  idProveedor = '$this->idProveedor',
                  idMarca = '$this->idMarca',
                  idCategoria = '$this->idCategoria'
                  where idProducto = ".$this->idProducto."
                  ";
        $sql = fn_EjecutarQuery($query);
        return 0;
    }

}