<?php
    include('../db_connection.php');

    //obtenemos valores login del formulario html    
    if (isset($_POST['send'])) 
    {            
        $email = $_POST['email'];
        $password = $_POST['password'];

        //QUERY para la consulta
        $query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";

        //intenta hacer connexion con la base de datos y obtener la info
        try {
            $result = mysqli_query($connexio, $query);
            $data = mysqli_fetch_assoc($result);
            if(!$data) {
                include"../view/login.html";
                echo "Login incorrecte";
            }
            
            //set session con los datos de la DDBB
            session_start();
            $_SESSION['name'] = $data["name"];
            $_SESSION['password'] = $data["surname"];
            $_SESSION['id'] = $data["id"];
            $_SESSION['rol'] = $data["rol"];
            $_SESSION['surname'] = $data["surname"];
            $_SESSION['email'] = $data["email"];
            $_SESSION['active'] = $data["active"];

        } catch (Exception $e) {
            include"../view/login.html";
            echo "Login incorrecte";
        }
        
    }
?>