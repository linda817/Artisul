<?php

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
                <div class="input-group" >
                    <div class="input-group-btn" >
                        <button type="button" class="btn btn-secondary btn-filter dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Filter by</span> <span class="caret" >&nbsp;</span></button>
                        <div class="dropdown-menu" >
                            <ul class="category_filters" >
                                <li>
                                <label for="all">Marca</label>
                                </li>
                                <li>
                                    <label class="category-label" for="Design" >Categoría</label>
                                </li>
                                <li>
                                   <label class="category-label" for="Marketing" >Proveedor</label>
                                </li>
                            </ul>
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
                <th scope="col">Estatus</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoría</th>
                <th scope="col">Cantidad</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Prismacolor Colored Pencils 12</td>
                <td>900.00</td>
                <td>Disponible</td>
                <td>Prismacolor</td>
                <td>Colores</td>
                <td>13</td>
                <td><a href="editar.php"><i class="fas fa-pen-square edit-icon"></i></a><td>
            </tr>
            <tr>
                <td>Mix Media 120 Pages Canson Sketch
                    Book</td>
                <td>520.00</td>
                <td>Disponible</td>
                <td>Canson</td>
                <td>Sketchbooks</td>
                <td>9</td>
                <td><a href="editar.php"><i class="fas fa-pen-square edit-icon"></i></a><td>
            </tr>
            <tr>
                <td>Prismacolor Colored Pencils 12</td>
                <td>900.00</td>
                <td>Disponible</td>
                <td>Prismacolor</td>
                <td>Colores</td>
                <td>13</td>
                <td><a href="editar.php"><i class="fas fa-pen-square edit-icon"></i></a><td>
            </tr>
            <tr>
                <td>Mix Media 120 Pages Canson Sketch
                    Book</td>
                <td>520.00</td>
                <td>Disponible</td>
                <td>Canson</td>
                <td>Sketchbooks</td>
                <td>9</td>
                <td><a href="editar.php"><i class="fas fa-pen-square edit-icon"></i></a><td>
            </tr>
            </tbody>
        </table>
    </section>





	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
