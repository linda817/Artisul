<?php
require_once ('../Tablas/Categoria.php');
require_once ('../Tablas/Marcas.php');
require_once ('../Tablas/Producto.php');
require_once ('../Tablas/Proveedor.php');

$Producto = new Producto();

$submit = 0;
if (isset($_POST['submit'])){
    $submit = $_POST['submit'];
}
if($submit == 1){
    //Agregar
    $Producto->nombreProducto = $_POST['nombreProducto'];
    $Producto->costoProducto = $_POST['costoProducto'];
    $Producto->descripcionProducto = $_POST['descripcionProducto'];
    $Producto->cantidadProducto = $_POST['cantidadProducto'];
    $Producto->idProveedor = $_POST['idProveedor'];
    $Producto->idCategoria = $_POST['idCategoria'];
    $Producto->idMarca = $_POST['idMarca'];

    $agregar = $Producto->insertar();

    if($agregar == 0){
        header("Location: manejo_inventario.php");
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add - Artisul</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="manejo_inventario.php"><img src="../img/logo%20artisul-8.png" alt="Logo"></a>
        </nav>
    </div>
</header>


<body>
    <section id="add">
        <div class="card mb-4">
            <div class="card-header">
                <span class="titulo-artisul font-weight-bold">Add Product</span>
            </div>
    </section>

    <section id="agregar">
        <form name="agregar" id="agregar" action="" method="post">
            <div class="container no-gutters manual-gutters">
                <input type="hidden" name="submit" value="1">

                <div class="container row">

                    <div class="row col-md-6">
                        <h2 class="titulo-azul general-margen">General</h2>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Nombre</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="nombreProducto" id="nombreProducto" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Marca</label>
                            </div>
                            <div class="col-9">
                                <select name="idMarca" id="idMarca" class="form-control">
                                    <?php
                                    //Aqui es para que aparezcan en listado todas las categorias.
                                    $Marca = new Marcas();
                                    $listado = $Marca->listadoCombo();
                                    foreach ($listado as $item){
                                        ?>
                                        <option value="<?=$item['idMarca']?>"><?=$item['nombreMarca']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Categoría</label>
                            </div>
                            <div class="col-9">
                                <select name="idCategoria" id="idCategoria" class="form-control">
                                    <?php
                                    //Aqui es para que aparezcan en listado todas las categorias.
                                    $Categoria= new Categoria();
                                    $listado = $Categoria->listadoCombo();
                                    foreach ($listado as $item){
                                        ?>
                                        <option value="<?=$item['idCategoria']?>"><?=$item['nombreCategoria']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Descripción</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="descripcionProducto" id="descripcionProducto" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="form-group col-md-6 manual-gutters2">
                        <h2 class="titulo-azul">Imagen</h2>
                        <div align="center">
                            <img src="../img/13655-1055-2-3ww-l.jpg" alt="utiles" class="img-fluid">
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary btn-add">Buscar</button>
                            <button type="submit" class="btn btn-primary btn-add clear">Clean</button>
                        </div>
                    </div>
                </div>
                <div class="container row">
                    <div class="row col-md-6">
                        <h2 class="titulo-azul margin-modif" >Costo y Manejo</h2>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Costo</label>
                            </div>
                            <div class="col-9">
                                <input type="number" name="costoProducto" id="costoProducto" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Proveedor</label>
                            </div>
                            <div class="col-9">
                                <select name="idProveedor" id="idProveedor" class="form-control">
                                    <?php
                                    $Proveedor = new Proveedor();
                                    $listado = $Proveedor->listadoCombo();
                                    foreach ($listado as $item) {
                                        ?>
                                        <option value="<?=$item['idProveedor']?>"><?=$item['nombreProveedor']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <label>Cantidad</label>
                            </div>
                            <div class="col-9">
                                <input type="number" name="cantidadProducto" id="cantidadProducto" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group botones-agregar-producto">
                <button type="submit" class="btn btn-primary">Guardar Datos</button>
                <a href="manejo_inventario.php" class="btn btn-dark">Cancelar</a>
            </div>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

</body>
</html>
