<?php

    //guardem dades necessaries per fer conexió amb la base de dades
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";

    //fem la connexió
        //creem la connexió
        $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

        if (!$connexio) {
            die("connexion fallida");
        }
        

        //obtenemos valores del formulario
    
        if (isset($_POST['send'])) 
        {
            $id = $_POST['id'];
            $rol = $_POST['rol'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $active = $_POST['active'];  
            
            if ($active='Si') {
                $active='True';
            } else {
                $active='False';
            }
            //QUERY para la consulta
            $query = "INSERT INTO `user` (`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email', '$active')";

        
            
        
            $result = mysqli_query($connexio, $query);

            if (!$result) {
                die("Query fail!");
            } else {
                echo'Se ha añadido';
            }

            header("altaUsuari.html");
        }
            
    mysqli_close($connexio);
?>