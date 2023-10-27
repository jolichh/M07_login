<?php
    setcookie("language", "", time()-1);
    header('Location: ../view/index.php');
?>