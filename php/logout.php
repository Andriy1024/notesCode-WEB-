<?php
    require "db.php";
    unset($_SESSION['logged_user']);
    $redicet = $_SERVER['HTTP_REFERER'];
    @header ("Location: $redicet");
?>