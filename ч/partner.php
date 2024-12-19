<?php
session_start();
error_reporting(E_ALL);

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'PRACTIK_LOEM';      // имя базы данных
	
$link = mysqli_connect($host, $user, $pass, $name) or die("can't access to database");

$res = $link->query("SELECT * FROM `partners_import`");

// if($_SESSION['auth']!='admin'){
//     header('Location:no.php');
// }

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
    <h1>приве админ</h1>
    <?php
    while($row = $res->fetch_assoc()) { ?>
    <div class="partner">
        <div class="partnerLeft">
            <h2><?php echo($row["type_partner"])?> | <?php echo($row["name_partner"])?></h2>
            <p><?php echo($row["director_partner"])?></p>
            <p><?php echo($row["number_partner"])?></p>
            <p>Рейтинг: <?php echo($row["rating_partner"])?></p>
        </div>
        <div class="partnerRight">
        <?php
        $discount;
        $idPart = $row["id_partner"];
        $queryCount = "SELECT `count_production` FROM `partner_products_import` WHERE `id_partner` = '$idPart'";
        $result = mysqli_query($link, $queryCount);

        if(mysqli_num_rows($result) == 0){
            $discount = 0;
        }

        else {
            $sum = 0;
            while($rowNew = $result ->fetch_assoc()){
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
        ?>
        <h2><?php echo $discount . '%' ?></h2>
        </div>
    </div>
    <?php } ?>
    <a href="index.php" <?php session_destroy()?>>Назад</a>
</body>
</html>