<?php     
    print_r('<em>sessió iniciada</em> <br>');

    // mostrar la sortida depenen el rol en la session
    if ($_SESSION['rol'] == 'alumne') {
        print_r('<br>Benvingut/da <b>'.$_SESSION['rol'] .' '.$_SESSION['name'].'</b><br>');
        print_r('<br>Rol de usuari: <strong>'. $_SESSION['rol']. '</strong>');
        print_r('<br><strong>Nom: </strong>'. $_SESSION['name'] . '<br>');
        print_r('<strong>Cognom:</strong> '. $_SESSION['surname'] . '<br>');
        print_r('<strong>Email:</strong> '. $_SESSION['email'] . '<br>');
    } else if($_SESSION['rol'] == 'professor') {
        print_r('<br>Benvingut/da <b>'.$_SESSION['rol'] .'/a: '.$_SESSION['name'].'</b><br>');
        // print_r('<br>El teu rol és: <b>' . $_SESSION['rol'] . '</b> <br>');
        print_r("<br>La llista d'usuaris de la base de dades és: <br>");
        llistaUsuaris($usuarios);
    }
    // Funció que utilitza un foreach per a mostrar les dades del array asociatiu $usuarios 
    function llistaUsuaris($usuarios) {
        foreach ($usuarios as $usuario) {
            // Mostra el nom i cognom de cadascun dels usuari
            print_r("nom i cognom: ".$usuario['name']." ".$usuario['surname']."<br>");
        }
    }
    print_r('<br><a href="delete_session.php">delete_session</a><br>');
?>