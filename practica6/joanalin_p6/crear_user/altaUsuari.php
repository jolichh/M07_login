<?php

    include('../db_connection.php');

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
            } 
            include"../view/altaUsuari.html";
            echo'<br>La inserció és correcte. <a href="../view/login.html">Iniciar sessió</a>';
        }
            
    mysqli_close($connexio);
?>