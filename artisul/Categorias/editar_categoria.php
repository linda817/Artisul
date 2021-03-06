<?php
require_once ('../Tablas/Categoria.php');
$Categoria = new Categoria();

$idCategoria = $_GET['id'];

$info = $Categoria->obtenerInfo($idCategoria);

$selectedActivo = "";
if ($info['estadoCategoria'] == 1) {
    $selectedActivo = "selected";
}
$selectedInactivo = "";
if ($info['estadoCategoria'] == 0) {
    $selectedInactivo = "selected";
}

$submit = 0;
if (isset($_POST['submit'])){
    $submit = $_POST['submit'];
}
if($submit == 1){
    //Actualizar
    $Categoria->idCategoria = $idCategoria;
    $Categoria->nombreCategoria = $_POST['nombreCategoria'];
    $Categoria->estadoCategoria = $_POST['estadoCategoria'];

    $actualizar = $Categoria->actualizar();

    if($actualizar == 0) {
        header("Location: index.php");
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
    <title>Edit - Artisul</title>
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
                <span class="titulo-artisul font-weight-bold">Editar Categoría</span>
            </div>
    </section>

    <section id="agregar">
        <div class="container no-gutters manual-gutters">

            <form name="agregar" id="agregar" action="" method="post">
                <input type="hidden" name="submit" value="1">
                <h2 class="titulo-azul general-margen">Información General</h2>
                    <div class="form-group col-md-3">
                        <label>Nombre</label>
                        <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control" required
                               value="<?php echo $info['nombreCategoria'] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Estado</label>
                        <select name="estadoCategoria" id="estadoCategoria" class="form-control">
                            <option value="1" <?= $selectedActivo ?>>Activo</option>
                            <option value="0" <?= $selectedInactivo ?>>Inactivo</option>
                        </select>
                    </div>

                <div class="form-group botones-agregar">
                    <button type="submit" class="btn btn-primary">Guardar Datos</button>
                    <a href="../Categorias/index.php" class="btn btn-dark">Cancelar</a>
                </div>

            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

</body>
</html>
