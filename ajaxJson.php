<?php 

error_reporting(E_ALL);

// $link = null;
// try{
//     $link = new PDO('mysql:host=localhost;dbname=KR_LOEM_04', $root, $pass='');
// } catch(PDOException $e){
//     echo($e . 'cant access to database');
// }

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'KR_LOEM_04';      // имя базы данных
	
$link = mysqli_connect($host, $user, $pass, $name) or die("can't access to database");

$res = $link -> query("SELECT * FROM `kurator`");

echo 'привет';

?>