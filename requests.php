<?php
        $fullname = filter_var(trim($_POST['fullname']),FILTER_SANITIZE_STRING);
        $mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
    
    
        $mysql = new mysqli('localhost','root','root', 'zxtourney'); 
    
        $mysql->query("INSERT INTO `requests` (`name`, `email`) VALUES('$fullname','$mail')");
        

        $mysql->close();
    
        header('Location: /');
?>