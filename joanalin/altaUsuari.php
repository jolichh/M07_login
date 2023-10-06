<?php

    //guardem dades necessaries per fer conexió amb la base de dades
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";

    //fem la connexió
        //creem la connexió
        $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre) or die('Error en conexion servidor');

        if (!$connexio) {
            die("connexion fallida". %conexion->$connect_error);
        } else {
            echo"connectado";
        }
        //QUERY para la consulta
        $query = `INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES ($id, $rol, $name, $surname, $password, $email, $active);` 

        //obtenemos valores del formulario
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $active = $_POST['active'];

        if (isset($id, $rol, $name, $surname, $password, $email, $active)) {
            
        }



    echo'Se ha añadido"';
    mysqli_close($connexio);
?>