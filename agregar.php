<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Agregar</title>

    <link rel="stylesheet" href="./css/style_admin_2.css" />

</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />


    <?php
    # recuperamos los datos ingresados 
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];

        include("conexion.php");
        //insert into alumnos(nombre,control)
        //values($nombre,$nocontrol);
        $sql = "insert into productos(nombre, precio) values('" . $nombre . "', '" . $precio . "')";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language='JavaScript'>alert ('Los datos fueron ingresados correctamente a la BD');
             location.assign('admin.php');
            </script>";
        } else {

            echo "<script language='JavaScript'>alert (' ERROR: Los datos no fueron ingresados correctamente a la BD');
            location.assign('admin.php');</script>";
        }
        mysqli_close($conexion);
    } else {
    }

    ?>


    <div class="position-absolute w-100 top translateaa" id="modalas">
        <form accion="<=?$_SERVER['PHP_SELF']?>" method="post" class="form-control w-50">
            <h1 class="text-center">Agregar pack</h1>
            <div class="form-control border-white">
                <label for="">Id :</label>
                <input type="text" class="form-control w-25" />
            </div>
            <div class="form-control border-white">
                <label for="">Nombre :</label>
                <input type="text" name="nombre" class="form-control" />
            </div>
            <div class="form-control border-white">
                <label for="">Precio:</label>
                <input type="number" name=" precio" class="form-control w-25" />
            </div>
            <div class="form-control border-white">
                <label for="">Dias de estadia :</label>
                <input type="number" class="form-control w-25" />
            </div>
            <div class="form-control border-white">
                <label for="">Descripcion:</label>
                <input type="number" class="form-control w-100" />
            </div>
            <div class="form-control border-white">
                <input type="submit" name="enviar" value="Agregar producto" class="btn btn-primary">

            </div>
        </form>

    </div>

    <a href="admin.php" class="position-absolute btn btn-danger close">Cerrar</a>

    </div>
</body>

</html>