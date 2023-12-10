<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_inserter_producto.css">
    <title>Document</title>
</head>
<body>
<?php
require("conexion.php");
$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS FALLO";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die("LA BASE DE DATOS NO EXISTE");

$id=$_POST["c_prod"];
$sec=$_POST["seccion"];
$prod=$_POST["n_prod"];
$org=$_POST["p_orig"];
$imp=$_POST["importado"];
$prec=$_POST["precio"];
$consulta = "INSERT INTO productos (id_producto,seccion, producto,origen,importado,precio)
VALUES ('$id','$sec','$prod','$org','$imp','$prec')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado==false){
    echo"ERROR DE EJECUCION";
}else {
    echo"EL PRODUCTO FUE ALMACENADO EXITOSAMENTE CON LOS SIGUIENTES DATOS:<br><br><br>";
    echo"CODIGO: "."$id"."<br>";
    echo"SECCION: "."$sec"."<br>";
    echo"PRODUCTO: "."$prod"."<br>";
    echo"PAIS DE ORIGEN: "."$org"."<br>";
    echo"¿ES IMPORTADO?: "."$imp"."<br>";
    echo"PRECIO: "."$prec"."<br>";
    
    
    
}

mysqli_close($conexion);
?>
</body>
</html>