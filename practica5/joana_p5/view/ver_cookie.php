<?php
    if(!$_COOKIE['language']) {
        header('Location: index.php');
    }
    elseif ($_COOKIE['language']=='es') {
        header('Location: ../view/login_es.html');
    }
    elseif ($_COOKIE["language"]=='en') {
        header('Location: ../view/login_en.html');
    }
    elseif ($_COOKIE["language"]=='cat') {
        header('Location: ../view/login_cat.html');
    }
?>