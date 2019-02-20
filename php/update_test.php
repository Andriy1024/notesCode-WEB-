<?php 
require "db.php"; 
if(isset($_SESSION['logged_user'])){
    $user = R::findOne('users', 'login = ?', array($_SESSION['logged_user']->login));
    $user->test_c = $_POST["res"];
    $_SESSION['logged_user']->test_c = $_POST["res"];
    R::store($user);
}
?>
                