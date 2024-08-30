<?php

session_start();

if($_POST){
    if(($_POST['nombre']=='Luis') && ($_POST['password']=='12345')){
        $_SESSION['usuario'] = $_POST['nombre'];
        header("Location:index.php");
    }else{
        echo "<script>alert('Usuario y/o contraseña incorrecto(s)')</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br>
                <div class="card">
                    <div class="card-header">Iniciar Sesión</div>
                    <div class="card-body">
                    
                        <form action="login.php" method="post">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                            <br>
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="password">
                            <br><br>
                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </form>

                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
                

            </div>
            <div class="col-md-4"></div>
        </div>

    </div>


</body>

</html>