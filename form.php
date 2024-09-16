
<?php
if(isset($_GET['editar'])){
    $id = $_GET['editar'];
    $sqli = "SELECT * FROM `empleados` WHERE `empleados`.`id` = " . $id;
    $op = $conexion->prepare($sqli);
    $op->execute();
    $datos = $op->fetchAll();

    foreach($datos as $mostrar){
        $ide = $mostrar['id'];
        $nombre = $mostrar['nombre'];
        $apellido = $mostrar['apellido'];
        $edad = $mostrar['edad'];
        $ocupacion = $mostrar['ocupacion'];
    }
}
?>
<form action="index.php" method="post">
    <input type="hidden" name="id_empleado" value="<?php echo (isset($ide)) ? $ide : ""; ?>">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo (isset($nombre)) ? $nombre : ""; ?>">
    <br>
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" value="<?php echo (isset($apellido)) ? $apellido : ""; ?>">
    <br>
    <label for="edad" class="form-label">Edad</label>
    <input type="text" class="form-control" name="edad" value="<?php echo (isset($edad)) ? $edad : ""; ?>">
    <br>
    <label for="ocupacion" class="form-label">Ocupación</label>
    <input type="text" class="form-control" name="ocupacion" value="<?php echo (isset($ocupacion)) ? $ocupacion : ""; ?>">
    <br><br>
    <input type="submit" class="btn btn-primary" value="<?php echo (isset($nombre)) ? "Actualizar" : "Agregar"; ?>">
</form>