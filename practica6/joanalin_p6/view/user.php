<?php    
    //este fichero trabaja con los datos que le envia el login.html
    include('../session/authentication.php');
    //obtiene el resultado del login.php y muestra los resultados según el rol
    if ($data) {    //doble comprobación
        
        if ($_SESSION["rol"]=="alumnat") {
            $valor = "alumne ".$_SESSION['name'];
        } else if ($data["rol"]=="professorat") {
            $valor = "professor/a ".$_SESSION['name'];              
        }
     }
        
    mysqli_close($connexio);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <p>Sessio iniciada</p>
    <h1>Benvolgut/da <?php echo $valor?></h1>
    <?php
if ($data["rol"]=="alumnat") {
    echo'soc un alumne <br>';
    echo'nom: '.$data["name"].'<br>';
    echo'cognom: '.$data["surname"].'<br>';
    echo'email: '.$data["email"].'<br>';

} else if ($data["rol"]=="professorat") {
    echo'Hola '.$data["name"].', ets professor!! <br><br>';
    echo"La llista d'usuaris de la base de dades és: <br>";

    $query_multiple = "SELECT * FROM `user`";

    if (mysqli_multi_query($connexio, $query_multiple)) {

        do {
            //primero guardamos resultado query
            if ($resultado = mysqli_store_result($connexio)) {
                //mostramos por cada fila de resultado
                while ($row = mysqli_fetch_array($resultado)) 
                {
            echo'Nom i cognom: '.$row["name"].' '.$row["surname"].'<br>';
                }
                mysqli_free_result($resultado);
            }                    
        } while (mysqli_next_result($connexio));    
        //mientras haya resultado hace bucle
    }            
}
    ?>
    <a href="../session/delete_session.php">Tanca la sessio</a>
</body>
</html>