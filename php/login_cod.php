<?php
    require "db.php";
    $data = $_POST;
    $_SESSION['logmess'] = "undef";
    $user = R::findOne('users','login = ?',array($data['login']));
    if($user){
        if(password_verify($data['password'],$user->password)){
            $_SESSION['logged_user'] = $user;
            $_SESSION['logmess'] = "Ви успішно авторизувалися";
        }else{
            $_SESSION['logmess'] = 'Не правильний пароль';
        }
    }else{
        $_SESSION['logmess'] = 'Користувача з таким логіном не існує!';
    }
    echo $_SESSION['logmess'];
?>
