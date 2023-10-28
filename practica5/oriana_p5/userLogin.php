<?php 
    include('db_connection.php');
    //Recurso fetch -> https://www.php.net/manual/es/mysqli-result.fetch-assoc.php

    $lang = $_POST['idioma']; 

    if (isset($_POST['submit'])) {
        $email = $_POST['email']; 
        $password = $_POST['password'];
    }
    // confirmar les dades per iniciar sessió
    $query = "SELECT rol, name, surname, email FROM `user` WHERE email = '$email' AND password = '$password' ";
    $resposta = mysqli_query($connexio, $query);

    if (mysqli_num_rows($resposta) == 0) {
        if ($lang == 'ca') {
            include 'login.html';
            echo "<p>Login incorrecte</p>";
            exit();
        } else if ($lang == 'es') {
            include 'es_login.html';
            echo "<p>Login incorrecto</p>";
            exit();
        } else if ($lang == 'en') {
            include 'en_login.html';
            echo "<p>Incorrect email or password</p>";
            exit();
        }
    } 

    $datosUsuaris = mysqli_fetch_assoc($resposta); // agafar l'objete amb les dades

    // demanar nom i cognom
    $llista = "SELECT name, surname FROM `user`;";
    $resultat =  mysqli_query($connexio, $llista);
    
    // emmagatzemar els noms i cognoms de tots els usuaris en un array '$usuarios'
    $usuarios = array();
    while($noms = mysqli_fetch_assoc($resultat)) {
        $usuarios[] = $noms;
    }
?>