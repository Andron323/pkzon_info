<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PKzon Log</title>
    <link href="styles/logsing.css" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?
    family=Kaushan+Script|Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
</head>
<body>
<div class="logo">
    <a class="logo_heaf" href="index.html">PKzon</a>
</div>
<form class="box" action="singintobd.php" method="post">
    <h1 class="h1">Sing in</h1>
    <input class="input" type="text" name="login" placeholder="Username">
    <input class="input" type="password" name="pass" id="pass1" placeholder="Password">
    <input class="input" type="password" name="repass" id="pass2" placeholder="Repeat password">
    <input class="input_btn" type="submit" name="btnSingin" value="Sing in">
    <a class="qvestion" href="login.php">Уже есть аккаунта?</a>
</form>

</body>
</html>