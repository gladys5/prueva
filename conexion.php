<?php
function conexion()
{
    $conexion = mysqli_connect('localhost', 'root', '', 'resguados', '3306');
    if ($conexion) {
        return $conexion;
    } else {
        return 'Error de conexion';
    }
}
