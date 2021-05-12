<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PKzon</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link href="styles/forma.css" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?
    family=Kaushan+Script|Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <script src="jquery-3.4.1.min.js" type="text/javascript"></script><!--Dolgen vsegda podkluchatsa pervim-->
    <script src="script.js" type="text/javascript"></script>
</head>
<body>
<header class="header">
    <div class="container">

        <script>
            function dell_name() {
                document.cookie = "user=; max-age=0";
                location.reload();
            }
        </script>

        <div class="reglog">
            <div class="reglog_left">
            </div>
            <div class="reglog_raight">
                <a class="nav_heaf" id="in" href="login.php">Вход</a>
                <a class="nav_heaf" id="reg" href="singin.php">Регистрация</a>
                <a class="nav_heaf" id="us_name" href="#"><div id="x"></div></a>
                <a class="nav_heaf" id="out" onclick="dell_name()" href="#" type="button">Выход</a>
            </div>
        </div>

        <div class="header_inner">
            <div class="logo">
                <a class="logo_heaf" href="index.html">PKzon</a>
            </div>

            <nav class="nav">
                <a class="nav_heaf" href="budget.html">Бюджетные</a>
                <a class="nav_heaf" href="top.html">Топовые</a>
                <a class="nav_heaf" href="podobraty.html">Подобрать</a>
            </nav>
        </div>

        <div class="header_img">
            <!--            <img class="header_img" src="images/intrimg4.png">-->
        </div>

        <div class="button">
            <a class="btn" href="podobraty.html">Давайте сделаем это!</a>
        </div>
    </div>
</header>


<div class="intro">
    <div class="container">

    </div>
</div>



<section class="section">
    <div class="container">
        <div class="content_container newbec">
            <div class="section_heder width">
                <h3 class="section_suptitle newbec">Выберете варианты из предложенных пунктов</h3>
                <form class="form" action="podborbd.php" method="post">
                    <div class="layb">
                        <select name="hedvibor" class="select">
                            <option class="option" name="budget">Бюджетное решение</option>
                            <!--                            <option class="option" name="">Среднебюджетное</option>-->
                            <option class="option" name="top">Топовое решение</option>
                        </select>
                        <div class="section_suptitle newbecst">Что вы будете использовать (Ctrl+Lkm-несколько вариантов)?</div>
                    </div>

                    <div class="table">

                        <script>
                            function progr() {
                                var chbox;
                                chbox=document.getElementById('prog');
                                if (chbox.checked) {
                                    var a =  document.getElementById("delprog");
                                    a.style.display = "block";
                                }
                                else {
                                    var obj= document.getElementById("delprog");
                                    obj.style.display = "none"
                                }
                            }
                        </script>
                        <script>
                            function graff() {
                                var chbox;
                                chbox=document.getElementById('graf');
                                if (chbox.checked) {
                                    var a =  document.getElementById("delgraf");
                                    a.style.display = "block";
                                }
                                else {
                                    var obj= document.getElementById("delgraf");
                                    obj.style.display = "none";
                                }
                            }
                        </script>
                        <script>
                            function gamee() {
                                var chbox;
                                chbox=document.getElementById('game');
                                if (chbox.checked) {
                                    var a =  document.getElementById("delgame");
                                    a.style.display = "block";
                                }
                                else {
                                    var obj= document.getElementById("delgame");
                                    obj.style.display = "none"
                                }
                            }
                        </script>
                        <script>
                            function sazee() {
                                var chbox;
                                chbox=document.getElementById('saze');
                                if (chbox.checked) {
                                    var a =  document.getElementById("delsaze");
                                    a.style.display = "block";
                                }
                                else {
                                    var obj= document.getElementById("delsaze");
                                    obj.style.display = "none"
                                }
                            }
                        </script>

                        <div>
                            <div class="center">
                                <input class="input" name="microffkk" type="checkbox">
                                <div class="section_suptitle newbecst">Пакет Microsoft Office.</div>
                            </div>
                            <div class="center">
                                <input class="input" name="videoaudiokk" type="checkbox">
                                <div class="section_suptitle newbecst">Видео/Аудио проигрывание.</div>
                            </div>
                            <div class="center">
                                <input class="input" name="brouserkk" type="checkbox">
                                <div class="section_suptitle newbecst">Работа с браузерами.</div>
                            </div>
                        </div>

                        <div>
                            <div class="center">
                                <input onclick="progr()" class="input" id="prog"  name="programkk" type="checkbox">
                                <div class="name_spis">
                                    <div class="section_suptitle newbecst">Программы для разработки:</div>
                                    <select  name="program[]" multiple id="delprog" class="perechen">
                                        <option class="option" value="androstud">Android Studio</option>
                                        <option class="option" value="intidea">IntelliJ IDEA</option>
                                        <option class="option" value="visualst">Visual Studio</option>
                                        <option class="option" value="unity">Unity</option>
                                        <option class="option" value="netbeens">NetBeans</option>
                                    </select>
                                </div>
                            </div>
                            <div class="center">
                                <input onclick="graff()" class="input" id="graf" name="grafikakk" type="checkbox">
                                <div class="name_spis">
                                    <div class="section_suptitle newbecst">Работа в графических редакторах:</div>
                                    <select name="grafika[]" multiple id="delgraf" class="perechen">
                                        <option class="option" value="adphotohop">Adobe Photoshop</option>
                                        <option class="option" value="ilustrator">IAdobe Illustrator</option>
                                        <option class="option" value="primerpro">Adobe Premiere Pro</option>
                                        <option class="option" value="indesign">Adobe InDesign</option>
                                        <option class="option" value="photostud">PicsArt Photo Studio</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="center">
                                <input onclick="gamee()" class="input" id="game" name="gameskk" type="checkbox">
                                <div class="name_spis">
                                    <div class="section_suptitle newbecst">Игры уровня:</div>
                                    <select name="games[]" multiple id="delgame" class="perechen">
                                        <option class="option" value="wot">World of Tanks</option>
                                        <option class="option" value="csgo">Counter-Strike: Global Offensive</option>
                                        <option class="option" value="gtaf">Grand Theft Auto V</option>
                                        <option class="option" value="pubg">PlayerUnknown's Battlegrounds</option>
                                        <option class="option" value="nfsp">Need for Speed: Payback</option>
                                    </select>
                                </div>
                            </div>
                            <div class="center">
                                <input onclick="sazee()" class="input" id="saze" name="sizekk" type="checkbox">
                                <div class="name_spis">
                                    <div class="section_suptitle newbecst">Размер доп встроенной мамяти:</div>
                                    <select name="size[]" multiple id="delsaze" class="perechen">
                                        <option class="option" name="stovosim">128Gb</option>
                                        <option class="option" name="dvestihsest">256Gb</option>
                                        <option class="option" name="patsotshest">516Gb</option>
                                        <option class="option" name="odintb">1Tb</option>
                                        <option class="option" name="dvatb">2Tb</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <input class="input_btn" type="submit" name="btnlog" value="Подобрать">

                    <?php
                    $prozesor = 0;
                    $videokarta = 0;
                    $operativnaypamyt = 0;
                    $nakopitel = 0;
                    $dopnakopitel = " missing ";

                    $tekprozesor = 0;
                    $tekvideokarta = 0;
                    $tekoperativnaypamyt = 0;
                    $teknakopitel = 0;
                    $tekdopnakopitel = 0;

                    if(isset($_POST['hedvibor']) )
                    {
                        $hedvibor = $_POST['hedvibor'];
                        switch($hedvibor) {
                            case "Бюджетное решение":
                                {
                                    $class = "0";
                                }
                                break;
                            case "Топовое решение":
                                {
                                    $class = "1";
                                }
                                break;
                        }
                    }

                    if(isset($_POST['microffkk']) )
                    {
                        $microffkk = $_POST['microffkk'];

                        $tekprozesor= 2;
                        $tekvideokarta= 0;
                        $tekoperativnaypamyt= 2;
                        $teknakopitel= 0;

                        if($tekprozesor >= $prozesor){
                            $prozesor=$tekprozesor;
                        }
                        if($tekvideokarta >= $videokarta){
                            $videokarta=$tekvideokarta;
                        }
                        if($tekoperativnaypamyt >= $operativnaypamyt){
                            $operativnaypamyt=$tekoperativnaypamyt;
                        }
                        if($teknakopitel >= $nakopitel){
                            $nakopitel=$teknakopitel;
                        }

                    }
                    if(isset($_POST['videoaudiokk']) )
                    {
                        $videoaudiokk = $_POST['videoaudiokk'];

                        $tekprozesor= 1;
                        $tekvideokarta= 0;
                        $tekoperativnaypamyt= 0;
                        $teknakopitel= 2;

                        if($tekprozesor >= $prozesor){
                            $prozesor=$tekprozesor;
                        }
                        if($tekvideokarta >= $videokarta){
                            $videokarta=$tekvideokarta;
                        }
                        if($tekoperativnaypamyt >= $operativnaypamyt){
                            $operativnaypamyt=$tekoperativnaypamyt;
                        }
                        if($teknakopitel >= $nakopitel){
                            $nakopitel=$teknakopitel;
                        }
                    }

                    if(isset($_POST['brouserkk']) )
                    {
                        $brouserkk = $_POST['brouserkk'];

                        $tekprozesor= 3;
                        $tekvideokarta= 0;
                        $tekoperativnaypamyt= 4;
                        $teknakopitel= 1;

                        if($tekprozesor >= $prozesor){
                            $prozesor=$tekprozesor;
                        }
                        if($tekvideokarta >= $videokarta){
                            $videokarta=$tekvideokarta;
                        }
                        if($tekoperativnaypamyt >= $operativnaypamyt){
                            $operativnaypamyt=$tekoperativnaypamyt;
                        }
                        if($teknakopitel >= $nakopitel){
                            $nakopitel=$teknakopitel;
                        }
                    }

                    if(isset($_POST['programkk']) )
                    {
                        $programkk = $_POST['programkk'];
                        if(isset($_POST['program']))
                        {
                            $program = $_POST['program'];
                            if(isset($program))
                            {
                                $nprogram = count($program);
                                for($i=0; $i < $nprogram; $i++)
                                {
                                    switch($program[$i])
                                    {
                                        case "androstud": {
                                            $tekprozesor= 6;
                                            $tekvideokarta= 2;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 4;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "intidea": {
                                            $tekprozesor= 4;
                                            $tekvideokarta= 1;
                                            $tekoperativnaypamyt= 5;
                                            $teknakopitel= 3;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "visualst": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 1;
                                            $tekoperativnaypamyt= 4;
                                            $teknakopitel= 2;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "unity": {
                                            $tekprozesor= 6;
                                            $tekvideokarta= 5;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 3;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "netbeens": {
                                            $tekprozesor= 6;
                                            $tekvideokarta= 1;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 3;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                    }
                                }
                            }

                        }
                    }

                    if(isset($_POST['grafikakk']) )
                    {
                        $grafikakk = $_POST['grafikakk'];
                        if(isset($_POST['grafika']))
                        {

                            $grafika = $_POST['grafika'];
                            if(isset($grafika))
                            {
                                $ngrafika = count($grafika);
                                for($i=0; $i < $ngrafika; $i++)
                                {
                                    switch($grafika[$i])
                                    {
                                        case "adphotohop": {
                                            $tekprozesor= 6;
                                            $tekvideokarta= 3;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 5;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "ilustrator": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 6;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 4;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "primerpro": {
                                            $tekprozesor= 6;
                                            $tekvideokarta= 6;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 6;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "indesign": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 4;
                                            $tekoperativnaypamyt= 5;
                                            $teknakopitel= 3;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "photostud": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 5;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 4;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                    }
                                }
                            }
                        }
                    }

                    if(isset($_POST['gameskk']) )
                    {
                        $gameskk = $_POST['gameskk'];
                        if(isset($_POST['games']))
                        {

                            $games = $_POST['games'];
                            if(isset($games))
                            {
                                $ngames = count($games);
                                for($i=0; $i < $ngames; $i++)
                                {
                                    switch($games[$i])
                                    {
                                        case "wot": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 6;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 5;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "csgo": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 4;
                                            $tekoperativnaypamyt= 5;
                                            $teknakopitel= 4;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "gtaf": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 6;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 6;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "pubg": {
                                            $tekprozesor= 6;
                                            $tekvideokarta= 5;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 5;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                        case "nfsp": {
                                            $tekprozesor= 5;
                                            $tekvideokarta= 5;
                                            $tekoperativnaypamyt= 6;
                                            $teknakopitel= 5;

                                            if($tekprozesor >= $prozesor){
                                                $prozesor=$tekprozesor;
                                            }
                                            if($tekvideokarta >= $videokarta){
                                                $videokarta=$tekvideokarta;
                                            }
                                            if($tekoperativnaypamyt >= $operativnaypamyt){
                                                $operativnaypamyt=$tekoperativnaypamyt;
                                            }
                                            if($teknakopitel >= $nakopitel){
                                                $nakopitel=$teknakopitel;
                                            }
                                        } break;
                                    }
                                }
                            }
                        }
                    }

                    if(isset($_POST['sizekk']) )
                    {
                        $sizekk = $_POST['sizekk'];
//    echo($sizekk . " sizekk ");
                        // - - - и т.д. - - -
                        if(isset($_POST['size']))
                        {
                            $size = $_POST['size'];
                            if(isset($size))
                            {
                                $nsize = count($size);
//            echo("</p>");
//            echo($size[$nsize-1] . " last size" );
                                $dopnakopitel=$size[$nsize-1];
                            }
                        }
                    }
//                    echo($prozesor . " prozesor ");
//                    echo("</p>");
//                    echo($videokarta . " videokarta ");
//                    echo("</p>");
//                    echo($operativnaypamyt . " operativnaypamyt ");
//                    echo("</p>");
//                    echo($nakopitel . " nakopitel ");
//                    echo("</p>");
//                    echo($dopnakopitel . " dopnakopitel ");
//                    echo("</p>");

                    require "connect.php";

                    $result_prozesor = $mysql->query("SELECT * FROM `prozesor` WHERE `rang` = '$prozesor' AND `class` = '$class'") or die($mysql->error);
                    $re_prozesor = $result_prozesor->fetch_assoc();

                    $result_videokarta = $mysql->query("SELECT * FROM `videokarta` WHERE `rang` = '$videokarta' AND `class` = '$class'") or die($mysql->error);
                    $re_videokarta = $result_videokarta->fetch_assoc();

                    $result_operativnaypamyt = $mysql->query("SELECT * FROM `operativnaypamyt` WHERE `rang` = '$operativnaypamyt' AND `class` = '$class'") or die($mysql->error);
                    $re_operativnaypamyt = $result_operativnaypamyt->fetch_assoc();

                    $result_nakopitel = $mysql->query("SELECT * FROM `nakopitel` WHERE `rang` = '$nakopitel' AND `class` = '$class'") or die($mysql->error);
                    $re_nakopitel = $result_nakopitel->fetch_assoc();


                    echo("<div > 
                            <div class='section_suptitle newbecst results'> Процессор:<label class='section_suptitle newbecst newbec'>$re_prozesor[naimen]</label></div>
                            <div class='section_suptitle newbecst results'> Графика: <label class='section_suptitle newbecst newbec'>$re_videokarta[naimen]</label></div>
                            <div class='section_suptitle newbecst results'> Оперативная память: <label class='section_suptitle newbecst newbec'>$re_operativnaypamyt[naimen]</label></div>
                            <div class='section_suptitle newbecst results'> Основной накопитель: <label class='section_suptitle newbecst newbec'>$re_nakopitel[naimen]</label></div>
                            <div class='section_suptitle newbecst results'> Дополнительный накопитель: <label class='section_suptitle newbecst newbec'>$dopnakopitel</label></div>
                          </div>");

                    $nav_log=$_COOKIE["user"];

                    $mysql->query("UPDATE choice SET re_prozesor='$re_prozesor[naimen]' WHERE login='$nav_log'")or die($mysql->error);
                    $mysql->query("UPDATE choice SET re_videokarta='$re_videokarta[naimen]' WHERE login='$nav_log'")or die($mysql->error);
                    $mysql->query("UPDATE choice SET re_operativnaypamyt='$re_operativnaypamyt[naimen]' WHERE login='$nav_log'")or die($mysql->error);
                    $mysql->query("UPDATE choice SET re_nakopitel='$re_nakopitel[naimen]' WHERE login='$nav_log'")or die($mysql->error);
                    $mysql->query("UPDATE choice SET dopnakopitel='$dopnakopitel' WHERE login='$nav_log'")or die($mysql->error);

                    $mysql->close();

                    //require('podobraty.html');
                    ?>
                    <a class="input_btn btnnew" href="https://t.me/Andron3239">Хочу обсудить и заказать эту сборку!</a>
                </form>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="content_container">
            <div class="podval">
                <div class="blok_end">
                    <div class="textpodval">Здесь новости от команды</div>
                    <div class="content_container">
                        <div class="info">
                            <a class="" href="https://www.instagram.com/pkzon.info?r=nametag"><img class="soc_img" src="images/instagram.png"></a>
                            <a class="nav_heaf name_soc" href="https://www.instagram.com/?hl=ru">Instagram</a>
                        </div>
                    </div>

                    <div class="blok_end_text">
                        <div class="blok_end_text_title pading">Мы принимаем</div>
                        <div class="textcenter">
                            <img class="card_img" src="images/visa.png">
                            <img class="card_img" src="images/webmoney.png">
                        </div>
                        <div class="textcenter">
                            <img class="card_img" src="images/mastercard.png">
                            <img class="card_img" src="images/payeer.png">
                        </div>
                        <div class="textcenter pading">
                            <div>&copy OOO "PKzon" 2019-2020</div>
                            <div>Все права защищены.</div>
                        </div>
                    </div>
                </div>

                <div class="blok_end">
                    <div class="textpodval">Тут можно с нами связаться</div>
                    <div class="content_container">
                        <div class="info">
                            <a class="" href="https://web.telegram.org/#/im"><img class="soc_img" src="images/telegram.png"></a>
                            <a class="nav_heaf name_soc" href="https://t.me/pkzoninfo">Telegram</a>
                        </div>
                    </div>

                    <div class="blok_end_text">
                        <div class="blok_end_text_title pading">Реклама на сайте</div>
                        <div class="textcenter">
                            <div>Тел: <a class="nav_heaf blok_end_text">+380980083854</a></div>
                            <div>Telegram: <a class="nav_heaf blok_end_text" href="https://t.me/Andron3239">@Andron3239</a> </div>
                        </div>
                    </div>
                </div>

                <div class="blok_end">
                    <div class="textpodval">А тут обзоры наших проектов</div>
                    <div class="content_container">
                        <div class="info">
                            <a class="" href="https://www.youtube.com/"><img class="soc_img" src="images/youtub.png"></a>
                            <a class="nav_heaf name_soc" href="https://www.youtube.com/">YouTube</a>
                        </div>
                    </div>

                    <div class="blok_end_text">
                        <div class="blok_end_text_title pading">Подключиться</div>
                        <div class="textcenter">
                            <a class="nav_heaf blok_end_text" href="login.php">Вход</a>
                        </div>
                        <div class="textcenter">
                            <a class="nav_heaf blok_end_text" href="singin.php">Регистрация</a>
                        </div>
                    </div>
                </div>

                <div class="blok_end">
                    <div class="textpodval">Здесь мы постим новости</div>
                    <div class="content_container">
                        <div class="info">
                            <a class="" href="https://twitter.com/explore"><img class="soc_img" src="images/tviter.png"></a>
                            <a class="nav_heaf name_soc" href="https://twitter.com/explore">Twitter</a>
                        </div>
                    </div>

                    <div class="blok_end_text">
                        <div class="blok_end_text_title pading">О нас</div>
                        <div>Подбераем комплектуещие, а так же собираем полноценные системы из новейших
                            компонентов от топовых производителей. Вместе с вами,нашими дорогими клиентами,
                            создаем идельные рабочие места и настоящее технологическое искуство.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="otstup">

        </div>

    </div>


</section>

<section class="section">

</section>

</body>
</html>
