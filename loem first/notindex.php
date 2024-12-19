<?php

error_reporting(E_ALL);
// require_once('index.php');

// $a = '12345';
// $b = $a[0] + $a[1] + $a[2] + $a[3] + $a[4];
// echo $b;
// $b;
// for($i = 0; $i < $a; $i++){
//     $c = $a[$i]++;

// }
// echo $c;

// $minute = 60;
// $year = 365;
// $hour = 24;

// echo $all = ($minute * $hour) * $year;

// $arr = [2,5,3,9];
// $a = $arr[0] * $arr[1];
// $b = $arr[2] * $arr[3];
// echo $res = $a + $b;

// $arr = ['y' => 2024, 'm' => 9, 'd' => 5];
// if ($arr['m'] == 9){
//     echo 'that is september ';
//     print_r($arr);
// }
// else echo 'that is not september';

// $num1 = 1;
// $num2 = 2;

// if ($num1 <= 1 && $num2 >= 3){
//     echo 'es';
// }
// else echo 'ow';

// $day = 31;

// if ($day <= 10){
//     echo 'first decade';
// }
// else if ($day > 10 && $day <= 20){
//     echo 'second decade';
// }
// else echo 'third decade';

// $age = 5;
// if ($age < 10 || $age > 99){
//     echo 'youre either less that 10 or more than 99';
//     if ($age > 10 || $age < 99){
        
//     }
// }

// $sum = 0;
// for($i = 1; $i <= 99; $i+=2){
//     echo($sum + $i);
// }

// $num = 1;
// for($i = 0; $i <= 100; $i++){
//     if ($num <= 100){
//         $num+=$i;
//     }
//     else{
//     echo $i;
//     break;
//     }
// }

// $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
// for($i = 0; $i < count($arr) / 2; $i++){
//     echo($i+1);
// }

// $arr = [12,25,13,66,88,23,31];
// $arr2 = [];
// for($i = 0; $i < count($arr2); $i++){
//     if(($arr[$i])[0] == 1){
//         $arr[$i] = $arr2[$i];
//     }
// }

// // // // // // // // // // // // // // // // // // // // // //ЗАДАНИЕ 1 
//напишите программу которая выводит на экран только четные числа от 1 до 20

// for($i = 1;$i <= 20; $i++){
//     if($i % 2 == 0){
//         echo($i . ' ');
//     }
// }

// // // // // // // // // // // // // // // // // // // // // //ЗАДАНИЕ 2
//дан массив с числами. $arr = [0,1,3,4,6,10,15,16,17,18,23];
//с помощью цикла выведите только простые числа

// $arr = [0,1,3,4,6,10,15,16,17,18,23];
// for($i = 0;$i < count($arr); $i++){
//     if($arr[$i] == 0){
//         echo($arr[$i] . " PRIME" . "<br>");
//     }
//     else if($arr[$i] % 2 == 0){
//         echo $arr[$i];
//         echo(" NOT A PRIME" . "<br>");
//     }
//     else echo($arr[$i] . " PRIME" . "<br>");
// }

// // // // // // // // // // // // // // // // // // // // // //ЗАДАНИЕ 3
//выведите на экран следующую пирамидку
//xxxxxxxxxx
//xxxxxxxx
//xxxxxx
//xxxx
//xx

// for($i = 0; $i < 5; $i++){
//     for($j = 1; $j <= (5-$i)*2; $j++){
//         echo('x');
//     }
//     echo("<br>");
// }

// $arr = [];
// function Func ($num, $numTwo){
//     for($i = 1; $i <= min($num, $numTwo); $i++){
//         if($num % $i == 0 && $numTwo % $i == 0){
//             $arr[] = $i;
//         }
//     }
//     return $arr;
// }
// print_r(Func(20,10));

// function Summa($num, $sum){
//     $arr = str_split($num,1);
//     for($i = 0; $i <= count($arr); $i++){
//         $sum += $arr[$i];
//     }
//     return $sum;
// }
// echo Summa(20,0);

// $date = date('w');
// function Week($date){
//     $arr = ["sun","mon","tue","wed","thu","fri","sat"];
//     return $arr[$date];
// }
// echo Week($date)

// $date = date('d.m.y');
// function Day($date){
//     $arr2 = [];
//     $arr = ["sun","mon","tue","wed","thu","fri","sat"];
//     echo $arr;
// }
// Day($date);
////////////////////////////////////////////////////////////aaaaaaaaaaam i tripping or i am real decomposing////// 


//ЗАДАНИЕ 1
//напишите программу которая выводит на экран все числа кратные 3 от 1 до 50
// for($i = 0;$i <= 50;$i++){
//     if($i % 3 == 0){
//         echo($i . ' ');
//     }
// }

//ЗАДАНИЕ 2
//Выведите на экран следующую пирамидку
//999999999
//88888888
//7777777
//666666
//55555
//4444
//333
//22
//1

// for($i = 9; $i > 0; $i--){
//     for($j = 0; $j < $i;$j++){
//         echo($i);
//     }
//     echo("<br>");
// }


// ЗАДАНИЕ 3
// Пусть у нас дан следующий объект. Давайте поменяем местами ключи и значения в объекте
//    $obj = {'a': 1, 'b': 2, 'c': 3, 'd': 4, 'e': 5};

// $obj = ['a'=> 1, 'b'=> 2, 'c'=> 3, 'd'=> 4, 'e'=> 5];

// print_r(array_flip($obj));


        // $str = "aa aba abba abbba abca abea";
        // $result = preg_replace('#ab+a#' , '!' , $str);

        // $str = "aa aba abba abbba abca abea";
        // $result = preg_replace('#ab*a#' , '!' , $str);

        // $str = "aa aba abba abbba abca abea";
        // $result = preg_replace('#ab&a#' , '!' , $str);

        // $str = "aa aba abba abbba abca abea";
        // echo ($result = preg_replace('#ab{0,3}a#' , '!' , $str));

        // $str = 'aa aba abba abbba abbbba abbbbba';
        // echo ($result = preg_replace('#ab{2,4}a#' , '!' , $str));

        // $str = 'aa aba abba abbba abbbba abbbbba';
        // echo ($result = preg_replace('#ab{0,3}a#' , '!' , $str));

        // $str = 'aa aba abba abbba abbbba abbbbba';
        // echo ($result = preg_replace('#ab{4,}a#' , '!' , $str));

        // $str = 'aba accca azzza wwwwa';
        // echo($result = preg_replace('#a.+?a#' , '!' , $str));

        // $str = 'a1a a2a a3a a4a a5a aba aca';
        // echo($result = preg_replace('/a\da/' , '!' , $str));

        // $str = 'a1a a22a a333a a4444a a55555a aba aca';
        // echo($result = preg_replace('/a\d+a/' , '!' , $str));

        // $str = 'aa a1a a22a a333a a4444a a55555a aba aca';
        // echo($result = preg_replace('/a\d*a/' , '!' , $str));

        // $str = 'avb a1b a2b a3b a4b a5b abb acb';
        // echo($result = preg_replace('/a\Db/' , '!' , $str));

        // $str = 'ave a#b a2b a$b a4b a5b a-b acb';
        // echo($result = preg_replace('/a\wb/' , '!' , $str));

        // $str = 'ave a#a a2a a$a a4a a5a a-a aca';
        // echo($result = preg_replace('/\s/' , '!' , $str));

        // $str = 'aAXa aeffa aGha aza ax23a a3sSa';
        // echo($result = preg_replace('/a[a-z0-9]a/' , '!' , $str));

        // $str = 'xaz xbz x1z xCz';
        // echo($result = preg_replace('/x[^a-zA-Z1-5]+z/' , '!' , $str));

        // $str = 'xaz x.z x3z x@z x$z xrz';
        // echo($result = preg_replace('/x[^.@$]z/' , '!' , $str));

        // $str = 'xaz x$z x-z xcz x+z x%z x*z';
        // echo($result = preg_replace('/x[$+-]z/' , '!' , $str));

        // $str = 'xazsdgvadhgeh.jpeg';
        // echo($result = preg_replace('/"jpg|jpeg"$/' , '!' , $str));

        // $str = 'index.html';
        // $reg = '/([a-z0-9]+)\.([a-z]{4})/';
        // preg_match($reg,$str,$result);
        // print_r($result);

        // $str = '2023-10-29 2024-11-30 2025-12-31';
        // $reg = '/([0-9]{4})\-([0-9]{2})\-([0-9]{2})/';
        // preg_match_all($reg,$str,$result);
        // print_r($result);

        // $str = '12 34 56 78';
        // echo ($res = preg_replace('/([0-9])([0-9])/','$2$1',$str));

        // $str = 'a aa aaa abab bbbb';
        // echo ($res = preg_replace('/([a-z])\1/','!',$str));

        // $str = 'aaa aaa bbb bbb ccc ddd';
        // echo ($res = preg_replace('/([a-z]+\s)\1+/','!',$str));

        // $str = '12:59:59 12:59:12 09:45:09';
        // echo ($res = preg_replace('/(?<hour>[0-9]{2}):(?<minute>[0-9]{2}):\k<hour>/','!',$str));

        // $arr = [
        //     '31-12-2025',
        //     '30-11-1995',
        //     '29-10-1990',
        // ];
        // echo ($res = preg_replace('//'));


        // $str = '<a href="" class="eee" id="zzz">';
        // $res = preg_match_all('/\b(\w+)(?==)/','!',$str);
        // echo ($res);
        

// <script>
// //infinite
// let b = 0;
// do{
//     let a = prompt('do you give a shit?');
//     if(a == 'yes'){
//     b++;
//     alert('do not');
// }
// else if(a == 'no'){
//     b++;
//     alert('molodes');
// }
// else alert('dont speak gibberish');
// }
// while(b < 1);

// </script>


// $arr = [
//     ['value' => '1', 'text' => 'text1'],
//     ['value' => '2', 'text' => 'text2'],
//     ['value' => '3', 'text' => 'text3'],
// ];

// foreach ($arr as $elem) {
//     echo '<select>' . '<option>' . $elem['value'] . $elem['text'] .'<option>' . '</select><br>';
// }

// $arr = [
//     ['name' => 'user1', 'age' => 30, 'salary' => 500],
//     ['name' => 'user2', 'age' => 31, 'salary' => 600],
//     ['name' => 'user3', 'age' => 32, 'salary' => 700],
// ];
// foreach($arr as $elem){
//     $table = "<tr>
//         <td>
//             {$elem['name']}
//         </td>
//         <td>
//             {$elem['age']}
//         </td>
//         <td>
//             {$elem['salary']}
//         </td>
//     </tr>";
// }

// $arr = [
//     [
//         'name' => 'user1',
//         'age'  => 30,
//     ],
//     [
//         'name' => 'user2',
//         'age'  => 31,
//     ],
//     [
//         'name' => 'user3',
//         'age'  => 32,
//     ],
// ];

	
// if (!isset($_SESSION['time'])) {
//     $_SESSION['time'] = time();
// }

// echo (time() - $_SESSION['time']);

// $first = file_get_contents('1text.txt');
// $second = file_get_contents('2text.txt');
// echo($first + $second);

// $arr = [1,2,3,4,5,6];
// file_put_contents('test.txt', array_sum($arr));
// file_get_contents('test.txt');

// $pow = file_get_contents('test.txt');
// file_put_contents('test.txt', $pow ** 2);

// $num = file_get_contents('test.txt');
// file_put_contents('test.txt', $num+1);
// echo $num;

// $arr = [file_get_contents('test.txt'),file_get_contents('1text.txt'),file_get_contents('2text.txt')];
// print_r($arr);

// $str = $str.join('',$arr);

// echo file_put_contents('new.txt', $str);

// echo file_get_contents(__DIR__. '/dir1/dir2/dir3/test.txt');
// echo(__DIR__);

// echo copy('text.txt','copy.txt')

//  /\--/\   Г
// |o . o |--|
// |_________|
//  U U   U U
// session_start();
// error_reporting(E_ALL);

// if (!isset($_SESSION['time'])) {
//     $_SESSION['time'] = time();
// }

// $arr = ['zhanna malakhova maksimovna','loem krutoi loh','empty void nothing'];
// mkdir('users');

// $arr = [["name" => "zhanna", "surname" => "malakhova", "lastname" => "maksimovna"],
// ["name" => "loem", "surname" => "krutoi", "lastname" => "loh"],
// ["name" => "empty", "surname" => "void", "lastname" => "nothing"]];

// for($i = 0; $i < count($arr); $i++){
//     mkdir('main' . $i + 1);
//     for ($j = 0; $j < $arr[$j]; $j++){
//         file_put_contents('data' . $j, $arr[$j]);
//     }
// }

// $str = '';
// foreach($arr as $key => $val){
//     $name = file_put_contents(__DIR__ . '/name.txt', $val[0]);
//     $surname = file_put_contents(__DIR__ . '/surname.txt', $val[1]);
//     $lastname = file_put_contents(__DIR__ . '/lastname.txt', $val[2]);

// }
// $users2 = 'users2.txt';
// if(file_exists($users2)){
//     $contents = file_get_contents($users2);
//     $names = explode("\n",$contents);
//     foreach($names as $name){
//         $name = trim($name);
//         if($name !== ''){
//             if(!file_exists($name)){
//                 mkdir($name);
//             }
//             $filePath = $name . "/" . $name . ".txt";
//             file_put_contents($filePath,$name);
//         }
//     }
//     echo('files and folders are created');
// }
// include_once('link.php');

// $query = "INSERT INTO users (name, age, salary) VALUES ('loem', 55, 1)";
// mysqli_query($link, $query) or die(mysqli_error($link));
// $link = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
// var_dump($link);

// $query = 'SELECT * FROM users';
// $res = mysqli_query($link,$query);
// // var_dump($res);
// if($res){
//     while($row = mysqli_fetch_assoc($res)){
//         echo '<table border ="1px solid black">' . '<tr>' . '<td>' . $row['id'] . '</td>' . '<td>' . $row['name'] . '</td>' . '<td>' . $row['age'] . '</td>' . '<td>' . $row['salary'] . '</td>' . '</tr>' . '</table>';
//     }
// }

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных
	
$link = mysqli_connect($host, $user, $pass, $name) or die("AAAAAAA CANT ACCESS TO DATABASE");

$query = "SELECT * FROM `users`";
$idk = mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            text-decoration: none;
        }
        table{
            border: 2px solid black;
            width: 300px;
        }
        tr,th,td{
            border: 1px solid black;
        }
        .main{
            width: 1000px;
            height: 700px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            margin: auto;
        }
        .forma{
            width: 400px;
            height: 700px;
        }
        input{
            text-align: center;
        }

    </style>
    <div class="main">
        <div class="tablica">
            <table>
                <th>имя</th>
                <th>возраст</th>
                <th>зарплата</th>
                <th>удолит</th>
                <th>поменят</th>
            <tr>
                <?php
                    while($newIDK = mysqli_fetch_assoc($idk)){
                    $id = $newIDK['id'];
                    
                ?>
            </tr>
            <tr>
                <td><?php echo $newIDK['name'];?></td>
                <td><?php echo $newIDK['age'];?></td>
                <td><?php echo $newIDK['salary'];?></td>
                <td><a href="?del=<?php //mysqli_query($link,$del);?>">удалит</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
        <div class="forma">
            <form action="" method="POST">
                <h1>добавьте чтуки в бд 👍</h1>
                <input type="text" name="username" placeholder="имя" required><br><br>
                <input type="number" name="age" placeholder="возраст" required><br><br>
                <input type="number" name="salary"  placeholder="зарплата" required><br><br>
                <input type="submit" value="добавить">
            </form>
        </div>
    </div>
    
    
    <?php
    if(isset($_POST) && !empty($_POST)){
        $id = 
        $username = $_POST['username'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $insert = "INSERT INTO `users`(`name`,`age`,`salary`) VALUES ('$username','$age','$salary')";
        $insertQuery = mysqli_query($link,$insert);
        $del = "DELETE FROM `users` WHERE `id` == $id";
        $delQuery = mysqli_query($link,$del);
        header("location: /");
    }
    
    ?>
    <!-- <form action="" method="POST">
        <label for="photo">insert photo</label>
        <input type="image" name="photo">
        <input type="submit">
    </form> -->
    <!-- <form action="./page2.php" method="POST">
        <label for="userLogin">enter login:</label><br>
        <input type="text" name="userLogin" value=""><br><br>
        <label for="userPassword">enter password:</label><br>
        <input type="password" name="userPassword" value=""><br><br>
        <input type="submit">
    </form> -->
    <!-- <form action="./page2.php" method="POST">
        <label for="userName">name:</label><br>
        <input type="text" name="userName" value=""><br><br>
        <label for="userAge">age:</label><br>
        <input type="number" name="userAge" value=""><br><br>
        <label for="userSalary">salary:</label><br>
        <input type="number" name="userSalary" value=""><br><br>
        <label for="userAny">anything:</label><br>
        <input type="text" name="userAny" value=""><br><br>
        <input type="submit">
    </form> -->
    <!-- <p></p> -->

<!-- <form action="./page2.php" method="GET">
    <p>enter the year of your birth</p>
	<input type="number" name="year"><br><br>
    <p>enter the month of your birth</p>
    <input type="number" name="month"><br><br>
    <p>enter the day of your birth</p>
    <input type="number" name="day"><br><br>
	<input type="submit">
</form> -->
        <!-- <div>
            <h2>name:</h2>
            <p>age: {}</p>
        </div> -->
    
    <!-- <h1>Main page</h1>
    <a href="page1.php">Page first</a>
    <a href="page2.php">Page second</a> -->
</body>
</html>