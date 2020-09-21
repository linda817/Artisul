<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artisul Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <section id="login">
        <div class="container">
            <div class="row cosas-login">
                <div class="article col-md-6">
                    <img src="img/artisul-8.png" alt="artisul">
                </div>
                <div class="article col-md-6 forma-login">
                    <form action="Productos/manejo_inventario.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="rememberme">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-add float-right">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </section>










<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
