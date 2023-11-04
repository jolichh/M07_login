<?php
    include('../db_connection.php');        

        //obtenemos valores del formulario html    
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
            } catch (Exception $e) {
                include"../view/login.html";
                echo "Login incorrecte";
            }
            
        }
            
    //mysqli_close($connexio); no cerraremos aqui ya que aun necesitamos la base de datos
?>