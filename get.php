
<?php
$nombre = $_GET['nombre'];
include_once 'conexion.php';

$sql = "SELECT INTO db (nombre) VALUES($nombre)";
$query = mysqli_query($conexion, $sql);
if ($query) {
    header('refresh:0;url=index.php');
}
