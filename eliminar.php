<?php
$id = $_GET['id'];
include("conexion.php");

$sql = "delete from productos where id ='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "<script language='JavaScript'>alert ('Los datos se eliminaron correctamente de la tabla');
        location.assign('admin.php');
       </script>";
} else {
    echo "<script language='JavaScript'>alert ('Los datos no fueron eliminados de la tabla);
        location.assign('admin.php');
       </script>";
}
