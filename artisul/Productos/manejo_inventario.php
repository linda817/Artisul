<?php

require_once ('../Tablas/Producto.php');

$Producto = new Producto();

$lista = $Producto->listado();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artisul</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="../img/logo%20artisul-8.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="input-group md-form form-sm form-1 pl-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="input-group">
                    <div class="input-group-btn" >
                        <button type="button" class="btn btn-secondary btn-filter dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Administrar</span> <span class="caret" >&nbsp;</span></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="../Marcas/index.php">Marcas</a>
                            <a class="dropdown-item" href="../Categorias/index.php">Categorías</a>
                            <a class="dropdown-item" href="../Proveedores/index.php">Proveedores</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

    <section id="add">
        <div class="card mb-4">
            <div class="card-header">
                <span class="titulo-artisul">Artisul Inventory</span>
                <div class="float-right">
                    <a href="adicionar_producto.php" class="btn btn-primary btn-add">
                        ADD
                    </a>
                </div>

            </div>
    </section>

    <section id="tabla-productos">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Costo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoría</th>
                <th scope="col">Cantidad</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($lista as $key){
            ?>
                <tr>
                    <td><?php echo $key["nombreProducto"] ?></td>
                    <td><?php echo $key["costoProducto"] ?></td>
                    <td><?php echo $key["descripcionProducto"] ?></td>
                    <td><?php echo $key["nombreMarca"] ?></td>
                    <td><?php echo $key["nombreCategoria"] ?></td>
                    <td><?php echo $key["cantidadProducto"] ?></td>
                    <td>
                        <a href="editar_producto.php?id=<?php echo $key['idProducto']?>">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

</body>
</html>
