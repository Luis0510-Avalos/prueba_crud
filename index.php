<?php include('conex.php') ?>
<?php include('cabecera.php') ?>
<?php

// Insertar datos y Actualizar
if ($_POST) {
    $i = $_POST['id_empleado'];
    $n = $_POST['nombre'];
    $a = $_POST['apellido'];
    $e = $_POST['edad'];
    $o = $_POST['ocupacion'];

    if($i){
        $stmt = $conexion->prepare('UPDATE empleados SET nombre = ?, apellido = ?, edad = ?, ocupacion = ? WHERE id = ?');
        $stmt->execute([$n, $a, $e, $o, $i]);
    }else{
        $stmt = $conexion->prepare('INSERT INTO empleados (nombre, apellido, edad, ocupacion) VALUES (?, ?, ?, ?)');
        $stmt->execute([$n, $a, $e, $o]);
    }
}


// Eliminar información
if (isset($_GET['borrar'])) {
    $idee = $_GET['borrar'];
    $sql = "DELETE FROM `empleados` WHERE `empleados`.`id` = " . $idee;
    $conexion->exec($sql);
    header("location:index.php");
}


// Mostrar datos
$sql = "SELECT * FROM `empleados`";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();

?>


<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <br>
        <?php include('form.php') ?>
    </div>
    <div class="col-4"></div>
</div>

<br><br>

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Ocupación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultado as $empleados){ ?>
            <tr>
                <td><?php echo $empleados['id'] ?></td>
                <td><?php echo $empleados['nombre'] ?></td>
                <td><?php echo $empleados['apellido'] ?></td>
                <td><?php echo $empleados['edad'] ?></td>
                <td><?php echo $empleados['ocupacion'] ?></td>
                <td>
                    <a href="?editar=<?php echo $empleados['id']; ?>" class="btn btn-warning">Editar</a>
                    |
                    <a href="?borrar=<?php echo $empleados['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>





<?php include('pie.php') ?>