<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de idioma</title>
</head>
<body>
    <?php  
        if(isset($_COOKIE['escull_idioma'])) {
            if($_COOKIE['escull_idioma'] == 'es') {
                header("Location: es_index.html");
            } elseif($_COOKIE["escull_idioma"] == 'ca') {
                header("Location: index.html");
            } elseif($_COOKIE['escull_idioma'] == 'en') {
                header("Location: en_index.html");
            } 
        }
    ?>
    <div style="text-align: center;">
        <h1>Escull el idioma</h1>
    </div>
    <table width="25%" align="center">
        <tr>
            <td><a href="crearCookie.php?idioma=es">
                <h1>Español</h1>
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.seekpng.com%2Fpng%2Fdetail%2F193-1937752_spain-flag-globe-spain-flag-ball-png.png&f=1&nofb=1&ipt=ecac828965ef39eb21ef03e156f330b7b1b1fdbfa3281e788817bc39f7ea537f&ipo=images" width="70" height="60">
            </td>
            <td><a href="crearCookie.php?idioma=ca"> 
                <h1>Català</h1>
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn4.iconfinder.com%2Fdata%2Ficons%2Fworld-flags-12%2F512%2FUntitled-2-03-512.png&f=1&nofb=1&ipt=fc441d69057b49f0cceccee2b290a7e2376f3f06cb6fc4cd38534c40693c264d&ipo=images" width="70" height="60">
            </td>
            <td><a href="crearCookie.php?idioma=en">
                <h1>English</h1>
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pinclipart.com%2Fpicdir%2Fmiddle%2F1-10387_uk-flag-png-british-flag-round-vector-clipart.png&f=1&nofb=1&ipt=2699a1b684cc17113077d0239cde3a65500c55e90dc5a366653f1e77dc0f52b6&ipo=images" width="70" height="60">
            </td>
        </tr>
    </table>
</body>
</html>