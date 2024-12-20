<?php

session_start();
error_reporting(E_ALL);

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'PRACTIK_LOEM';      // имя базы данных
	
$link = new mysqli($host, $user, $pass, $name) or die("can't access to database");

$sessionUser = $_SESSION['auth'];

if($_SESSION['auth'] == ""){
    header("Location: index.php");
}

$res = $link-> query ("SELECT * FROM `partners_import` WHERE `partners_import`.`email_partner` = '$sessionUser'");

if($res -> num_rows > 0){
    $_SESSION['id_partner'] = $res -> fetch_assoc()['id_partner'];
    $partnerId = $_SESSION['id_partner'];
}
$result = $res -> fetch_all(MYSQLI_ASSOC);
$resDisc = $link-> query ("SELECT `count_production` FROM `partner_products_import` WHERE `id_partner` = '$partnerId'");
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
    <h1>привет юзер</h1>
    <div class="partner">
        <div class="partnerLeft">
        <?php foreach($result as $row){?>
            <h2><?php echo $row["type_partner"]?> | <?php echo $row["name_partner"]?></h2>
            <p><?php echo $row["director_partner"]?></p>
            <p><?php echo $row["number_partner"]?></p>
            <p>Рейтинг: <?php echo $row["rating_partner"]?></p>
            <?php } ?>
        </div>
        <div class="partnerRight">
        <?php
        ?>
        <h2>
        <?php
        $discount;

        if($resDisc -> num_rows == 0){
           $discount = 0;
        }
        else {
            $sum = 0;
            foreach($resultDisc as $rowNew){
                $sum += $rowNew["count_production"];
                if($sum <= 10000){
                    $discount = 0;
                }
                else if($sum > 10000 && $sum <= 50000){
                    $discount = 5;
                }
                else if($sum > 50000 && $sum <= 300000){
                    $discount = 10;
                }
                else if($sum > 300000){
                    $discount = 15;
                }
            }
        }
        echo $discount . '%'
        ?>
        </h2>
        </div>
    </div>
    <a href="index.php" <?php session_destroy()?>>Назад</a>
</body>
</html>