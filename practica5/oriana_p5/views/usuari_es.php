<?php 
    include('../userLogin.php'); // esto hará la consulta

    // gestionar el rol si es maestro o si es alumno
    $rolUsuari = $datosUsuaris['rol'];

    // mostrar la salida depende de si es profe o alumno
    if ($rolUsuari == 'alumne') {
        print_r('Rol de usuario: <strong>'. $rolUsuari. '</strong><br>');
        print_r('<br><strong>Nombre: </strong>'. $datosUsuaris['name'] . '<br>');
        print_r('<strong>Apellidos:</strong> '. $datosUsuaris['surname'] . '<br>');
        print_r('<strong>Correo:</strong> '. $datosUsuaris['email'] . '<br>');
    } else if($rolUsuari == 'professor') {
        print_r('Hola '. $datosUsuaris['name']. " " .$datosUsuaris['surname'] . '! tu rol es: <strong>' . $rolUsuari . '</strong> <br>');
        print_r("<br>La lista de usuarios de la base de dades es: <br>");
        llistaUsuaris($usuarios);
    } 

    // Funció que utilitza un foreach per a mostrar les dades del array asociatiu $usuarios 
    function llistaUsuaris($usuarios) {
        foreach ($usuarios as $usuario) {
            // Mostra el nom i cognom de cadascun dels usuari
            print_r("nombre y apellidos: ".$usuario['name']." ".$usuario['surname']."<br>");
        }
    } 
?>