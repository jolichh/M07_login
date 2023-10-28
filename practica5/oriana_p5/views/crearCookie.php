<?php 
    // El nom de la cookie és 'escull_idioma'
    setcookie("escull_idioma", $_GET['idioma']);
    header("Location: sel_Cookie.php");
?>