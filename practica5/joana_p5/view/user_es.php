<?php
    
    include('../iniciar_sessio/userLogin.php');
    //include('../db_connection.php'); esto no funciona en más de 1 archivo

    if ($data) {    //doble comprobación

        
        if ($data["rol"]=="alumnat") {
            echo'Soy un estudiante <br>';
            echo'Nombre: '.$data["name"].'<br>';
            echo'Apellido: '.$data["surname"].'<br>';
            echo'Correo electrónico: '.$data["email"].'<br>';
        } else if ($data["rol"]=="professorat") {
            echo'Hola '.$data["name"].', ¡eres un profesor! <br><br>';
            echo"La lista de usuarios de la base de datos es: <br>";


            $query_multiple = "SELECT * FROM `user`";

            if (mysqli_multi_query($connexio, $query_multiple)) {

                do {
                    //primero guardamos resultado query
                    if ($resultado = mysqli_store_result($connexio)) {
                        //mostramos por cada fila de resultado
                        while ($row = mysqli_fetch_array($resultado)) 
                        {
                            echo'Nombre y Apellido: '.$row["name"].' '.$row["surname"].'<br>';
                        }
                        mysqli_free_result($resultado);
                    }                    
                } while (mysqli_next_result($connexio));    
                //mientras haya resultado hace bucle
            }
                
        }
     }
        
    mysqli_close($connexio);
?>