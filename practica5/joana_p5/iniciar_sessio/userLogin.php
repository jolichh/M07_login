<?php
    include('../db_connection.php');        

        //obtenemos valores del formulario
    
        if (isset($_POST['send'])) 
        {            
            $email = $_POST['email'];
            $password = $_POST['password'];

            //QUERY para la consulta
            $query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";

            try {
                $result = mysqli_query($connexio, $query);
                //var_dump($result);
                //print_r($result);
                $data = mysqli_fetch_assoc($result);
                //var_dump($data);
                //header("Location: user.php");
                if(!$data) {
                    include"../view/login.html";
                    echo "Login incorrecte";
                }
            } catch (Exception $e) {
                include"../view/login.html";
                echo "Login incorrecte";
            }
            
        }
            
    //mysqli_close($connexio);
?>