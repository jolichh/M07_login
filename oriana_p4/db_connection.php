<?php 
    include('db_Conf.php');

    try {
        $connexio = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // connectar
    } catch(Exception $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
?>
