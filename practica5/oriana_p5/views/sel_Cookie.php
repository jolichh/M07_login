<?php  
    if(!$_COOKIE['escull_idioma']) {
        header("Location: idioma.php");
    } else if($_COOKIE['escull_idioma'] == 'es') {
        header("Location: es_index.html");
    } else if($_COOKIE["escull_idioma"] == 'ca') {
        header("Location: index.html");
    } else if($_COOKIE['escull_idioma'] == 'en') {
        header("Location: en_index.html");
    } 
?>