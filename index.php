<?php
include_once 'coneccion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>conectando a la base de datos</h1>
    <table>
        <tr>
            <td>nombre</td>
        </tr>
        <?php
        $con = conexion();
        $sql = "SELECT *FROM generales";
        mysqli_query($con, $sql);
        if ($query) {
            $contador = 1;
            while ($row = mysqli_fetch_assoc($query));
            echo $nombre = $row['nombre'];
        }
        ?>
        <tr>
            <td><?php echo $contador; ?></td>

            <td><?php echo $nombre; ?></td>
        </tr>
        $contador++;
    </table>
</body>

</html>