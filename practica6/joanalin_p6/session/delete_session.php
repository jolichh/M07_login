<?php
    session_start();    //utiliza los valores que hay guardada en la session
    session_unset();    //elimina valores variables de session
    session_destroy();  //elimina tot menys id
    header('Location: ../view/login.html');
?>