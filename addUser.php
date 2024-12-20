<?php

error_reporting(E_ALL);

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'Theatre';      // имя базы данных
        
$link = mysqli_connect($host, $user, $pass, $name) or die("failed to access the database");

$login = $_POST['login'];
$email = $_POST['email'];
$theatre = $_POST['theatre'];

$insertReg = "INSERT INTO `actor`
(`name`, `email`, `theatre`)
VALUES ('$login','$email','$theatre')";
$queryReg = $link -> prepare ($insertReg);
$queryReg -> execute();
$resultReg = $queryReg -> get_result();

?>