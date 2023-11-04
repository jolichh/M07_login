<?php    
    //este fichero trabaja con los datos que le envia el login.html
    include('../session/authentication.php');
    //obtiene el resultado del login.php y muestra los resultados según el rol
    if ($data) {    //doble comprobación
        //asignacion de valores
        echo'Sessió iniciat<br>';
        if ($data["rol"]=="alumnat") {
            echo'<h1>Benvolgut/da alumne '.$_SESSION["name"].'</h1><br>';

            echo"Les teves dades són: <br><br>";
            echo'nom: '.$_SESSION["name"].'<br>';
            echo'cognom: '.$_SESSION["surname"].'<br>';
            echo'email: '.$_SESSION["email"].'<br>';

        } else if ($data["rol"]=="professorat") {            
            echo'<h1>Benvolgut/da professor/a '.$_SESSION["name"].'</h1><br>';
            echo"La llista d'usuaris de la base de dades és: <br><br>";

            //query para la obtención de los datos de la DDBB
            $query_multiple = "SELECT * FROM `user`";

            if (mysqli_multi_query($connexio, $query_multiple)) {

                do {
                    //primero guardamos resultado query
                    if ($resultado = mysqli_store_result($connexio)) {
                        //mostramos por cada fila de resultado
                        while ($row = mysqli_fetch_array($resultado)) 
                        {
                    echo'<li>Nom i cognom: '.$row["name"].' '.$row["surname"].'</li>';
                        }
                        mysqli_free_result($resultado);
                    }                    
                } while (mysqli_next_result($connexio));    
                //mientras haya resultado hace bucle
            }            
        }
        echo'<br><a href="../session/delete_session.php">Tanca la sessió</a>';
     }
        
    mysqli_close($connexio);
?>