<?php
    include('../db_connection.php');        

        //obtenemos valores del formulario
    
        if (isset($_POST['send'])) 
        {            
            $email = $_POST['email'];
            $password = $_POST['password'];

            //QUERY para la consulta
            $query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";

            $result = mysqli_query($connexio, $query);

            if (!$result) {
                die("Query fail");
            } else {
                var_dump($result);
            }
            
            
        }
            
    mysqli_close($connexio);
?>