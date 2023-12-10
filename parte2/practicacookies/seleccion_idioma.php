<?php
    if(isset($_COOKIE["sel_idioma"])){
        
        if($_COOKIE["sel_idioma"]=="sp"){
            header("Location:pag_español.php");
        }

        elseif($_COOKIE["sel_idioma"]=="en"){
            header("Location:pag_ingles.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccion de idioma</title>
    <link rel="stylesheet" href="../css_practica_cookies/estilo_seleccion.css">
</head>
<body>
    <div class="selector">
        <h1>Selecciona un idioma para visualizar el contenido.</h1>
        <a href="cookie.php?idioma=sp"><img src="/DESARROLLO_WEB/parte2/imagenes/español.png" width="300" height="200" border="5" ></a>
        <a href="cookie.php?idioma=en"><img src="/DESARROLLO_WEB/parte2/imagenes/ingles.png" width="300" height="200" border="5" ></a>
    </div>
    
</body>
</html>


