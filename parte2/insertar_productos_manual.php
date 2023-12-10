<?php
require("conexion.php");
$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS FALLO";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die("LA BASE DE DATOS NO EXISTE");

$consulta = "INSERT INTO productos (id_producto,seccion, producto,origen,importado,precio)
VALUES ('ar40','FERRETERIA','pela cables','china','VERDADERO',10000)";
$resultado=mysqli_query($conexion,$consulta);

mysqli_close($conexion);
?>