<?php 
    // Dades per establir la connexió amb la BBDD
    $db_host = "localhost";
    $db_nom = "users";
    $db_usuari = "root";
    $db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_usuari, $db_passwd, $db_nom); // connectar
    
    // validar amb isset?
    if(isset($_POST['submit'])) {
        // Obtenem les dades del formulari POST
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $active = isset($_POST['active']) ? true : false;
    
        $query = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`)
                  VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email', '$active')";

        // enviar les dades a la BBDD
        if (mysqli_query($connexio, $query)) {
            echo 'Guardado en la BBDD con éxito!!';
        } else {
            echo 'Error al guardar en la BBDD: ' . mysqli_error($connexio);
        }

        header("Location: formulario.html");
        // tancar la connexio
        mysqli_close($connexio);
    }
?>