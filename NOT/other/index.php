<?php 

error_reporting(E_ALL);

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'KR_LOEM_04';     // имя базы данных
	
$link = mysqli_connect($host, $user, $pass, $name) or die("can't access to database");

$res = $link -> query("SELECT * FROM `kurator`");

while($row = mysqli_fetch_assoc($res)){
    if (!empty($_POST) && isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
        mysqli_real_escape_string($link,$row['userLogin']);
        mysqli_real_escape_string($link,$row['userPassword']);

        $userLogin = $_POST['userLogin'];
        $userPassword = $_POST['userPassword'];

        //header('Location:ajaxJson.php');
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
    <form action="" method="POST">
        <input type="text" name="userLogin" id="userLogin">
        <input type="text" name="userPassword" id="userPassword">
        <input type="submit" id="btn">
    </form>
    <p class="hidden">привет</p>
    <script src="script.js"></script>
</body>
</html>