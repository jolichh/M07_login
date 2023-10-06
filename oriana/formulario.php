<?php 
    // Dades per establir la connexió amb la BBDD
    $db_host = "localhost";
    $db_nom = "users";
    $db_usuari = "root";

    $connexio = mysqli_connect($db_host, $db_usuari, $db_nom); // connectar
    
    // validar amb isset?
    if(isset($_POST['id']) and isset($_POST['rol']) and isset($_POST['name']) and isset($_POST['surname']) and 
    isset($_POST['password']) and isset($_POST['email']) and isset($_POST['active'])) {
        // Obtenem les dades del formulari POST
        $id = $_POST['id'];
        $rol = $_POST['rol'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $active = $_POST['active'];
                
        $query = `INSERT INTO user(id, 'rol', 'name', 'surname', 'password', 'email', active)
                  VALUES ($id, '$rol', '$name', '$surname', '$password', '$email', $active)`;

        $usuaris = mysqli_query($connexio, $query); // enviar les dades a la BBDD

        $echo ' guardado en la BBDD con éxito!!';
    }
?>
<?php ?>
