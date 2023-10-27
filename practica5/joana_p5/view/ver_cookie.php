<?php
    if(!$_COOKIE['language']) {
        echo'NO HAY COOKIEEE';
        header('Location: index.php');
        echo'NO HAY COOKIEEE';
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