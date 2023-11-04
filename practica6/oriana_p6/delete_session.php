<?php
    // iniciar la sessió
    session_start(); 

    // netega les variables de la session
    session_unset();

    // destrueix tota la session
    session_destroy();

    header('Location: views/login.html'); // redirigir a login.html
?>