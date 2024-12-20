<?php

error_reporting(E_ALL);
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'Theatre';      // имя базы данных
        
$link = mysqli_connect($host, $user, $pass, $name) or die("failed to access the database");

$arrayJSON = json_decode(json: file_get_contents(filename: 'php://input'),
associative: true);

$selectAll = "SELECT *,`name-theatres`
FROM `actor`
JOIN `theatres` ON `theatres`.`id` = `actor`.`theatre`
ORDER BY `name` DESC";
$queryAll = $link -> prepare($selectAll);
$queryAll -> execute();
$resultAll = $queryAll -> get_result();

echo'<div class="container">
<table>
    <tr>
        <td>№ п/п</td>
        <td>Имя</td>
        <td>Email</td>
        <td>Театр</td>
    </tr>
';
$i = 1;
if($resultAll -> num_rows > 0){
    foreach($resultAll as $row2){
        echo '<tr>';
            echo '<td>'. $i++ . '</td>';
            echo '<td>' . $row2['name'] . '</td>';
            echo '<td>' . $row2['email'] . '</td>';
            echo '<td>' . $row2['name-theatres'] . '</td>';
        echo '</tr>';
    }
}
echo '</table> </div>';



?>