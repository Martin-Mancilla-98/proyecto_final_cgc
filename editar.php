<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar </title>

    <link rel="stylesheet" type="text/css" href="./css/estilos.css">

    <link rel="stylesheet" href="./css/style_admin_2.css" />
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <?php
    if (isset($_POST['enviar'])) {
        // aca hay que presionar el boton de enviar 
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];

        $sql = "update productos set nombre='" . $nombre . "',
         precio='" . $precio . "'where id='" . $id . "'";

        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            echo "<script language='JavaScript'>alert ('Los datos se actualizaron correctamente');
            location.assign('admin.php');
           </script>";
        } else {
            echo "<script language='JavaScript'>alert ('Los datos no se actualizaron ');
            location.assign('admin.php');
           </script>";
        }

        mysqli_close($conexion);
    } else {
        #recuperar el id del archivo id
        #el que se esta presionando 
        //si no presiona el boton de enviar 
        $id = $_GET['id'];
        $sql = "select * from productos where id='" . $id . "'";
        $resultado = mysqli_query($conexion, $sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila["nombre"];
        $precio = $fila["precio"];

        mysqli_close($conexion);
    }
    ?>

    <!------------------------------------------------------------------------------------------------------------------------>

    <div class="position-absolute w-100 top translateaa" id="modalas">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-control w-50">
            <h1 class="text-center">Editar pack</h1>
            <label for="">Nombre :</label>
            <div class="form-control border-white">
                <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" />
            </div>
            <div class="form-control border-white">
                <label for="">Precio :</label>
                <input type="number" name="precio" value="<?php echo $precio; ?>" class="form-control w-25" />
            </div>
            <!------------------------------------------------------->
            <!--id que se encuentra manipulado -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <!---->

            <div class="form-control border-white">
                <label for="">Dias de estadia :</label>
                <input type="number" class="form-control w-25" />
            </div>
            <div class="form-control border-white">
                <label for="">Descripcion:</label>
                <input type="number" class="form-control w-100" />
            </div>
            <div class="form-control border-white">
                <input type="submit" name="enviar" class="btn btn-primary" value="ACTUALIZAR">
            </div>
        </form>
        <button class="position-absolute btn btn-danger close">Cerrar</button>
        <a href="admin.php" class="position-absolute btn btn-danger close">Cerrar</a>
    </div>
</body>

</html>