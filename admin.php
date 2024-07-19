<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <script type="text/javascript">
        function confirmar() {
            return confirm('estas seguro que deseas eliminar los dato');
        }
    </script>
    <!--linea de estilo -->
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
</head>

<body>
    <?php
    include("conexion.php");
    //seleccionar todo 
    $sql = "select * from productos";
    $resultado = mysqli_query($conexion, $sql);
    #hasta se recuperaron los datos 
    ?>
    <h1>Lista de packs de viajes </h1>
    <a href="agregar.php">Nuevo pack de viaje</a><br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre:</th>
                <th>Precio:</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($filas = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                    <td><?php echo $filas['id'] ?> </td>
                    <td><?php echo $filas['nombre'] ?> </td>
                    <td><?php echo $filas['precio'] ?> </td>
                    <td>
                        <?php echo "<a href='editar.php?id=" . $filas['id'] . "
                    '>Editar</a>"; ?>
                        -
                        <?php echo "<a href='eliminar.php?id=" . $filas['id'] . "'
                    onclick='return confirmar()'>Eliminar</a>"; ?>
                    </td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    mysqli_close($conexion);
    ?>
</body>

</html>