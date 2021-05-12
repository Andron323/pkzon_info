<?php
$login = filter_var(trim($_POST["login"]),
    FILTER_SANITIZE_STRING);//удаляем пробелы и html символы с переменной
$pass = filter_var(trim($_POST["pass"]),
    FILTER_SANITIZE_STRING);//удаляем пробелы и html символы с переменной

$pass = md5($pass."hgtfrdesrtu342");//создается хеш

require "connect.php";

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'") or die($mysql->error);
$user = $result->fetch_assoc();
if(count($user) == 0){

    $admin_result = $mysql->query("SELECT * FROM `admin_users` WHERE `login` = '$login' AND `pass` = '$pass'") or die($mysql->error);
    $admin_user = $admin_result->fetch_assoc();
    if (count($admin_user) == 0){
        echo "<script>alert('Неверный логин или пароль.');</script>";
        require('login.php');
        exit();
    }else{
        setcookie('user', $user['login'], time() + 3600, "/");
        $mysql->close();
        require('adminpanel.php');
        exit();
    }
}

setcookie('user', $user['login'], time() + 3600, "/");


$mysql->close();

header("Location: index.html"); exit;//переход на страницу
//require('index.html');


?>