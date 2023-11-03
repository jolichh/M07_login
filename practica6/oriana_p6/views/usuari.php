<?php     
    if ($_SESSION['rol'] == 'alumne') {
        echo 'Benvingut/da '.$_SESSION['rol'] .' '.$_SESSION['name'];

    } else if($_SESSION['rol'] == 'professor') {
        echo 'Benvingut/da '.$_SESSION['rol'] .'/a '.$_SESSION['name'];
    }
    // $dades = $_SESSION['rol'];
    // echo $dades . " desde usuari.php";
    // // gestionar el rol si es maestro o si es alumno
    // $rolUsuari = $datosUsuaris['rol'];

    // // mostrar la salida depende de si es profe o alumno
    // if ($rolUsuari == 'alumne') {
    //     print_r('Rol de usuari: <strong>'. $rolUsuari. '</strong><br>');
    //     print_r('<br><strong>Nom: </strong>'. $datosUsuaris['name'] . '<br>');
    //     print_r('<strong>Cognom:</strong> '. $datosUsuaris['surname'] . '<br>');
    //     print_r('<strong>Email:</strong> '. $datosUsuaris['email'] . '<br>');
    // } else if($rolUsuari == 'professor') {
    //     print_r('Hola '. $datosUsuaris['name']. " " .$datosUsuaris['surname'] . '! el teu rol és: <strong>' . $rolUsuari . '</strong> <br>');
    //     print_r("<br>La llista d'usuaris de la base de dades és: <br>");
    //     llistaUsuaris($usuarios);
    // } 

    // // Funció que utilitza un foreach per a mostrar les dades del array asociatiu $usuarios 
    // function llistaUsuaris($usuarios) {
    //     foreach ($usuarios as $usuario) {
    //         // Mostra el nom i cognom de cadascun dels usuari
    //         print_r("nom i cognom: ".$usuario['name']." ".$usuario['surname']."<br>");
    //     }
    // } 
?>