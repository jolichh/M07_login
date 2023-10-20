<?php 
    include('db_connection.php');

    // validar amb isset?
    if(isset($_POST['submit'])) {
        // Obtenem les dades del formulari POST
        $id = $_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $active = isset($_POST['active']) ? true : false;
        
        $query = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`)
                  VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email', '$active')";

        // enviar les dades a la BBDD
        $result =  mysqli_query($connexio, $query);
        
        if ($result) {
            include 'views/index.html';
            echo "La inserción es correcta. ";
            exit();
        }
        // tancar la connexio
        mysqli_close($connexio);
    }
?>