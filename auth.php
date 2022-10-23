<?php
    if($_COOKIE['user'] == 'Yes')
        setcookie('user', 'Yes', time() - 3600, '/');
    else
        setcookie('user', 'Yes', time() + 3600, '/');

    header('Location: /');
?>