<?php
    setcookie('user', $user['login'], time() - 3600, "/");
    setcookie('email', $user['email'],time()-3600,'/');
    setcookie('pass', $user['pass'],time()-3600,'/');
    setcookie('role', $user['role'],time()-3600,'/');


    header('Location: /');
?>