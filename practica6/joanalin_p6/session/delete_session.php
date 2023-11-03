<?php
    session_start();    
    session_unset();    //elimina valores variables de session
    session_destroy();  //elimina tot menys id
    header('Location: ../view/login.html');
?>