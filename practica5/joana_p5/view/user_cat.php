<?php
    
    include('../iniciar_sessio/userLogin.php');
    //include('../db_connection.php'); esto no funciona en más de 1 archivo

    if ($data) {    //doble comprobación

        
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
        echo '<br><a href="delete_cookie.php">Torna a inici i elimina cookies</a><br>';
    }
        
    mysqli_close($connexio);
?>