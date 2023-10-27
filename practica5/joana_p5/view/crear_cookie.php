<?php
    $cookie_name = "language";
    $cookie_value = $_GET["lang"];
    setcookie($cookie_name, $cookie_value);
    header('Location: ver_cookie.php');
?>