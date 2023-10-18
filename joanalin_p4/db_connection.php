<?php

    //dades necessaries per fer conexió amb la base de dades
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";

    //creem la connexió i comprobar connexió
    try {
        $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
    } catch (Exception $e) {
        die("Query fail!");
    }

?>