<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - Artisul</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="../img/logo%20artisul-8.png" alt="Logo"></a>
        </nav>
    </div>
</header>

<body>

<section id="edit">
    <div class="card mb-4">
        <div class="card-header">
            <span class="titulo-artisul font-weight-bold">Edit Product</span>
        </div>
</section>

<section id="agregar">
    <div class="container no-gutters manual-gutters">

        <form name="agregar" id="agregar" action="" method="post">
            <input type="hidden" name="submit" value="1">

            <div class="row">

                <div class="form-group col-md-6">
                    <h2 class="titulo-azul general-margen">General</h2>

                    <div class="row">
                        <div class="col-3">
                            <label>ID</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="codigo" id="codigo" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label>Nombre</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label>Marca</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="marca" id="marca" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label>Categoría</label>
                        </div>
                        <div class="col-9">
                            <select name="categoria" id="categoria" class="form-control">

                                <?php
                                //Aqui es para que aparezcan en listado todas las categorias.
                                /*
                                $Proveedor = new Proveedor();
                                $listado = $Proveedor->listadoCombo();
                                foreach ($listado as $item){
                                    ?>
                                    <option value="<?=$item['idProveedor']?>"><?=$item['nombreProveedor']?></option>
                                <?php
                                    }
                                */
                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label>Descripción</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
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
                        <button type="reset" class="btn btn-primary btn-add clear">Clean</button>
                    </div>
                </div>

            </div>

        </form>



        <form name="agregar" id="agregar" action="" method="post">
            <input type="hidden" name="submit" value="1">

            <div class="row">

                <div class="form-group col-md-6">
                    <h2 class="titulo-azul margin-modif" >Costo y Manejo</h2>

                    <div class="row">
                        <div class="col-3">
                            <label>Costo</label>
                        </div>
                        <div class="col-9">
                            <input type="number" name="costo" id="costo" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label>Proveedor</label>
                        </div>
                        <div class="col-9">
                            <select name="proveedor" id="proveedor" class="form-control">

                                <?php
                                //Aqui es para que aparezcan en listado todos los proveedores.
                                /*$Proveedor = new Proveedor();
                                $listado = $Proveedor->listadoCombo();
                                foreach ($listado as $item){
                                    ?>
                                    <option value="<?=$item['idProveedor']?>"><?=$item['nombreProveedor']?></option>
                                <?php
                                    }
                                */?>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label>Cantidad</label>
                        </div>
                        <div class="col-9">
                            <input type="number" name="cantidad" id="cantidad" class="form-control">
                        </div>
                    </div>
                </div>

            </div>
    </div>
    <div id="save-cancelar" class="form-group">
        <button type="submit" class="btn btn-primary btn-add save">Save Product</button>
        <a href="../manejo_inventario.php" class="btn btn-primary btn-add cancelar">Cancelar</a>
    </div>
    </form>

    </div>
</section>



<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
