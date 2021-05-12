<?php

$login = filter_var(trim($_POST["login"]),
    FILTER_SANITIZE_STRING);//удаляем пробелы и html символы с переменной
$pass = filter_var(trim($_POST["pass"]),
    FILTER_SANITIZE_STRING);//удаляем пробелы и html символы с переменной
$repass = filter_var(trim($_POST["repass"]),
    FILTER_SANITIZE_STRING);//удаляем пробелы и html символы с переменной


if(mb_strlen($login) < 4 || mb_strlen($login) > 15){
    echo "<script>alert('Допустимая длинна Username 4-15 символов');</script>";
    require('singin.php');
    exit();
}
if(mb_strlen($pass) < 4 || mb_strlen($pass) > 20){
    echo "<script>alert('Допустимая длинна Password 4-20 символов');</script>";
    require('singin.php');
    exit();
}

if($pass != $repass)
{
    echo "<script>alert('Пароли не совпали,повторите попытку.');</script>";
    require('singin.php');
    exit;

}
else{
    echo "<script>alert('Авторизуйтесь с помощью Username и Password.');</script>";
}
$pass = md5($pass."hgtfrdesrtu342");//создается хеш
$repass = md5($pass."hgtfrdesrtu342");//создается хеш



require "connect.php";

$mysql->query("INSERT INTO `users` (`login`, `pass`)
VALUES ('$login', '$pass')");

$def="non";

$mysql->query("INSERT INTO `choice` (`login`,`re_prozesor`, `re_videokarta`,`re_operativnaypamyt`, `re_nakopitel`,`dopnakopitel`)
                    VALUES ('$login','$def', '$def','$def', '$def','$def')") or die($mysql->error);


$mysql->close();

//header("Location: index.html"); exit;//переход на страницу
require('index.html');

?>
