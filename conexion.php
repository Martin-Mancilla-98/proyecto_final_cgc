<?php
# el nombre de la base de datos 
$dbname = "viajes";
#el usuario root
$dbuser = "root";
$dbhost = "localhost";
#contraseña vacia
$dbpass = "";

#seccion de conexion 
$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
