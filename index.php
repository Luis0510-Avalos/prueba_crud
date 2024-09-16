<?php include('conex.php') ?>
<?php include('cabecera.php') ?>
<?php

if($_POST) {
    $n = $_POST['nombre'];
    $a = $_POST['apellido'];
    $e = $_POST['edad'];
    $o = $_POST['ocupacion'];

    $stmt = $conexion->prepare('INSERT INTO empleados (nombre, apellido, edad, ocupacion) VALUES (?, ?, ?, ?)');
    $stmt->execute([$n, $a, $e, $o]);

}

?>


<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <br>
        <?php include('form.php') ?>
    </div>
    <div class="col-4"></div>
</div>




<?php include('pie.php') ?>