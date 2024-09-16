<?php

$servidor = "localhost"; //127.0.0.1
$nameDB = "prueba_crud";
$usuario = "root";
$password = "";


try {
    $conexion = new PDO("mysql:host=$servidor; dbname=$nameDB", $usuario, $password);
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "conexión establecida";
} catch (PDOException $error) {
    echo "Conexión errónea".$error;
}
?>