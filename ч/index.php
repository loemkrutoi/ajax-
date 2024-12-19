<?php
session_start();
error_reporting(E_ALL);

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'PRACTIK_LOEM';      // имя базы данных
	
$link = mysqli_connect($host, $user, $pass, $name) or die("can't access to database");

$res = $link -> query("SELECT * FROM `partners_import`");

while($row = mysqli_fetch_assoc($res)){
    if (!empty($_POST) && isset($_POST['login']) && isset($_POST['password'])) {
        mysqli_real_escape_string($link,$row['login']);
        mysqli_real_escape_string($link,$row['password']);

        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($login == 'loem' && $password == 'loem') {
            $_SESSION['auth'] = 'admin';
            header('Location:partner.php');
        }
        else {
            $_SESSION['auth'] = $login;
            header('Location:user.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="" method="POST" id="indexForm">
    <h1>Вход</h1>
    <input type="text" name="login" placeholder="Введите логин" class="notABtn"><br><br>
    <input type="password" name="password" placeholder="Введите пароль" class="notABtn"><br><br>
    <input type="submit" value="Отправить" class="ABtn">
</form>
<a href="queryMake.php">Сделать заказ</a>    
</body>
</html>