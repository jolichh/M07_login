<?php 
    // iniciar la sessió
    session_start();

    include('db_connection.php');

    if (isset($_POST['submit'])) {
        $email = $_POST['email']; 
        $password = $_POST['password'];
    }

    // comprobar que existe l'usuari a la BBDD
    $credencials = "SELECT rol, name, surname, email FROM `user` WHERE email = '$email' AND password = '$password'";
    $resultat =  mysqli_query($connexio, $credencials);

    if (mysqli_num_rows($resultat) == 0) {
        include 'login.html';
        echo "<p>Login incorrecte</p>";
        exit();
    }
    $datos = mysqli_fetch_assoc($resultat); 

    // guardar los datos en variables $_SESSION 
    $_SESSION['rol'] = $datos['rol'];
    $_SESSION['name'] = $datos['name'];
    $_SESSION['surname'] = $datos['surname'];
    $_SESSION['email'] = $datos['email'];

    //echo $_SESSION['name'];
    include 'views/usuari.php';
?>