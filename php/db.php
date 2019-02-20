<?php 
    require "libs/rb.php";
    // R::setup('mysql:host=localhost;dbname=notescode', 'root', '');
    R::setup('mysql:host=mysql.zzz.com.ua;dbname=andriy1024', 'notescode', 'qwer1024DATABASE');
    // $isConnected = R::testConnection();
    // echo $isConnected;
    session_start();
?>