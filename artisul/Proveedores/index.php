<?php
/*
require_once ('../tablas/Proveedor.php');

$Proveedor = new Proveedor();

$listado = $Proveedor->obtener();

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores - Artisul</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

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
                            <a class="dropdown-item" href="#">Proveedores</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<body class="sb-nav-fixed">

<section id="marcas-index">
    <div class="card mb-4">
        <div class="card-header">
            <span class="titulo-artisul">Proveedores</span>
            <div class="float-right">
                <a href="adicionar_proveedor.php" class="btn btn-primary btn-add">
                    ADD
                </a>
            </div>

        </div>
</section>

<section id="tabla-proveedor">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /*foreach ($listado as $item){
            ?>
                <tr>
                    <td>
                        <a href="editar_proveedor.php?id=<?php echo $item["idProveedor"]?>">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td><?php echo $item['idProveedor'] ?></td>
                    <td><?php echo $item['nombreProveedor'] ?></td>
                    <td><?php echo $item['estadoProveedor'] ?></td>
                </tr>
            <?php
                }*/
                ?>
                </tbody>
            </table>
</section>



    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

