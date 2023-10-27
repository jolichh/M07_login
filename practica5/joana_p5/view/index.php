<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccion idioma</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['language'])) {
            header("Location: ./ver_cookie.php");
        }
    ?>
    <table padding="10px">
        <h1>Select a language/ Selecciona un idioma/ Escull un idioma</h1>
        <tr>
            <td width="30%">
                <a href="crear_cookie.php?lang=en">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/800px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" width="250px">    
                    <h3>English</h3>
                </a>
            </td>
            <td width="30%">
                <a href="crear_cookie.php?lang=es">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/750px-Flag_of_Spain_%28Civil%29.svg.png" width="250px">
                    <h3>Spanish</h3>
                </a>
            </td>
            <td width="30%">
                <a href="crear_cookie.php?lang=cat">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Catalonia.svg/1280px-Flag_of_Catalonia.svg.png" width="250px">
                    <h3>Catalan</h3>
                </a>
            </td>
        </tr>
    </table>
    
</body>
</html>