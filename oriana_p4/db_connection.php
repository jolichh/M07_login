<?php 
    // Dades per establir la connexió amb la BBDD
    $db_host = "localhost";
    $db_nom = "users";
    $db_usuari = "root";
    $db_passwd = "";

    try {
        $connexio = mysqli_connect($db_host, $db_usuari, $db_passwd, $db_nom); // connectar
        echo 'Guardado en la BBDD con éxito!!';
    } catch(Exception $e) {
        echo "Error al intentar conectarse a la base de datos";
    }
?>