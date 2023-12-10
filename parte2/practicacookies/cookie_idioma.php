<?php
if (!$_COOKIE["sel_idioma"]){
    header("Location:seleccion_idioma.php");

} elseif($_COOKIE["sel_idioma"]=="sp"){
    header("Location:pag_español.php");

} elseif($_COOKIE["sel_idioma"]=="en"){
    header("Location:pag_ingles.php");
}
?>