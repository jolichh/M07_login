<?php 
    include('../userLogin.php'); // esto hará la consulta

    // gestionar el rol si es maestro o si es alumno
    $rolUsuari = $datosUsuaris['rol'];

    // mostrar la salida depende de si es profe o alumno
    if ($rolUsuari == 'alumne') {
        print_r('User role: <strong>'. $rolUsuari. '</strong><br>');
        print_r('<br><strong>Name: </strong>'. $datosUsuaris['name'] . '<br>');
        print_r('<strong>Surname:</strong> '. $datosUsuaris['surname'] . '<br>');
        print_r('<strong>Email:</strong> '. $datosUsuaris['email'] . '<br>');
    } else if($rolUsuari == 'professor') {
        print_r('Hi '. $datosUsuaris['name']. " " .$datosUsuaris['surname'] . '! your user rol is: <strong>' . $rolUsuari . '</strong> <br>');
        print_r("<br>The list of users in the database is: <br>");
        llistaUsuaris($usuarios);
    } 

    // Funció que utilitza un foreach per a mostrar les dades del array asociatiu $usuarios 
    function llistaUsuaris($usuarios) {
        foreach ($usuarios as $usuario) {
            // Mostra el nom i cognom de cadascun dels usuari
            print_r("name and surname: ".$usuario['name']." ".$usuario['surname']."<br>");
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <br>
    <a href="eliminarCookie.php">Delete cookie</a>
    <a href="idioma.php">Back to select language</a>
</body>
</html>