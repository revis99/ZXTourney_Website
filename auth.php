<?php
        $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    
    
        $mysql = new mysqli('localhost','root','root','zxtourney'); 
    
        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
        $user = $result->fetch_assoc();
    
        if(count($user) == 0) {
            echo "Такой пользователь не найден";
            exit();
        }

        setcookie('user', $user['name'],time()+3600,'/');
        setcookie('email', $user['email'],time()+3600,'/');
        setcookie('pass', $user['pass'],time()+3600,'/');
        setcookie('role', $user['role'],time()+3600,'/');


        $mysql->close();
    
        header('Location: /');
?>

<!-- DELETE FROM `users` WHERE `users`.`id` = 6 -->