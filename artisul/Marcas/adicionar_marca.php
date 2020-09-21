<?php
/*
require_once ('../tablas/Categoria.php');
require_once ('../tablas/Marcas.php');
require_once ('../tablas/Producto.php');
require_once ('../tablas/Proveedor.php');

$Categoria = new Categoria();

$submit = $_POST['submit'];
if($submit == 1){
    //Agregar
    $Marca->idCategoria = $_POST['idCategoria'];
    $Marca->nombreCategoria = $_POST['nombreCategoria'];
    $Marca->estadoCategoria = $_POST['estadoCategoria'];


    $agregar = $Categoria->insertar();

    if($agregar == 0){
        header("Location: manejo_inventario.php");
    }

}
*/
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
            <a class="navbar-brand" href="../Productos/manejo_inventario.php"><img src="../img/logo%20artisul-8.png" alt="Logo"></a>
        </nav>
    </div>
</header>


<body>
<section id="add">
    <div class="card mb-4">
        <div class="card-header">
            <span class="titulo-artisul font-weight-bold">Agregar Marca</span>
        </div>
</section>

<section id="agregar">
    <div class="container no-gutters manual-gutters">

        <form name="agregar" id="agregar" action="" method="post">
            <input type="hidden" name="submit" value="1">

            <h2 class="titulo-azul general-margen">Información General</h2>


            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombreMarca" id="nombreMarca" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
                <label>Estado</label>
                <select name="estadoMarca" id="estadoMarca" class="form-control">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="form-group botones-agregar">
                <button type="submit" class="btn btn-primary">Guardar Datos</button>
                <a href="index.php" class="btn btn-dark">Cancelar</a>
            </div>

        </form>

    </div>
</section>


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>