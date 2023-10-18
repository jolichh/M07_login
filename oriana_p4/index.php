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
        $active = $_POST['active'];

        if ($active == 'true') {
            $active = true;
        } else {
            $active = false;
        }
    
        $query = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`)
                  VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email', '$active')";

        // enviar les dades a la BBDD
        if (mysqli_query($connexio, $query)) {
            echo 'Guardado en la BBDD con éxito!!';
        } else {
            echo 'Error al guardar en la BBDD: ' . mysqli_error($connexio);
        }

        header("Location: ./views/index.html");
        // tancar la connexio
        mysqli_close($connexio);
    }
?>