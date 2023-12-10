<?php
    setcookie('sel_idioma', $_GET["idioma"], time() + 60 * 60 * 24); // Cookie válida por 1 día 
    header("Location: cookie_idioma.php");

?>

