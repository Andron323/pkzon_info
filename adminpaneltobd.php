<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PKzon Log</title>
    <link href="styles/logsing.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link href="styles/forma.css" rel="stylesheet" type="text/css">
    <link href="styles/admin.css" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?
    family=Kaushan+Script|Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
</head>
<body>
<div class="logo">
    <a class="logo_heaf" href="index.html">PKzon</a>
</div>


<div class="beetwin none_skrin" id="louwithraight">
    <section class="raight_panel little_psnel little_little_psnel">
        <div class="container">

            <div class="content_container dopmargen">
                <div class="panel">
                    <div class="blok_end_text_title pading">Меню страницы</div>
                    <div><a class="nav_heaf blok_end_text" href="#get_sborka">Получить сборку</a></div>
                    <div><a class="nav_heaf blok_end_text" href="#add_dell">Add/Dell Admin</a></div>
                    <div><a class="nav_heaf blok_end_text" href="#update">Update комплект.</a></div>
                    <div><a class="nav_heaf blok_end_text" href="#entr_table">Get таблицу</a></div>
                </div>
            </div>

        </div>
    </section>
</div>


<section class="section">
    <div class="container" id="get_sborka">
        <div class="content_container newbec">
            <div class="section_heder width">

                <h3 class="section_suptitle newbec">Введите имя USER для получения его сборки</h3>
                <form class="form" action="adminpaneltobd.php#get_sborka" method="post">
                    <input class="input_admin" type="text" name="login_us" placeholder="Username">
                    <input class="input_btn" type="submit" name="btnlog" value="Показать сборку">
                    <?php
                    if(isset($_POST['login_us']) ) {
                        $login_us = $_POST["login_us"];
                        require "connect.php";
                        $result = $mysql->query("SELECT * FROM `choice` WHERE `login` = '$login_us'") or die($mysql->error);
                        $user_sbor = $result->fetch_assoc();
                        if (count($user_sbor) == 0) {
                            echo("<div class='section_suptitle newbecst results'>Этот USER не сделал подборку</div>");
                        } else {
                            echo("<div >
                            <div class='section_suptitle newbecst results'>$login_us</div>
                            <div class='section_suptitle newbecst results'> Процессор:<label class='section_suptitle newbecst newbec'>$user_sbor[re_prozesor]</label></div>
                            <div class='section_suptitle newbecst results'> Графика: <label class='section_suptitle newbecst newbec'>$user_sbor[re_videokarta]</label></div>
                            <div class='section_suptitle newbecst results'> Оперативная память: <label class='section_suptitle newbecst newbec'>$user_sbor[re_operativnaypamyt]</label></div>
                            <div class='section_suptitle newbecst results'> Основной накопитель: <label class='section_suptitle newbecst newbec'>$user_sbor[re_nakopitel]</label></div>
                            <div class='section_suptitle newbecst results'> Дополнительный накопитель: <label class='section_suptitle newbecst newbec'>$user_sbor[dopnakopitel]</label></div>
                          </div>");
                        }
                        $mysql->close();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container" id="add_dell">
            <div class="content_container newbec">
                <div class="section_heder width">

                    <?php
                    if(isset($_POST['login_admin']))
                    {
                        $adminsel = $_POST['adminsel'];
                        switch($adminsel) {
                            case "Добавить":
                                {
                                    $login_admin=$_POST["login_admin"];
                                    $pass_admin=$_POST["pass_admin"];

                                    if(mb_strlen($login_admin) < 4 || mb_strlen($login_admin) > 15){
                                        echo "<script>
                                                    function skrit() {
                                                        var obj= document.getElementById(\"vspl_okn\");
                                                        obj.style.display = \"none\"
                                                    }
                                                 </script>
                        
                                                    <div class=\"vspluv_okno\" id=\"vspl_okn\">
                                                        Вы ввели некорректные данные,Username 4-15 символов,Password 4-20 символов.
                                                        <input onclick=\"skrit()\" class=\"input_btn\" type=\"submit\" name=\"btnlog\" value=\"Скрыть\">
                                                    </div>
                        
                                                    <script>
                                                            var obj= document.getElementById(\"vspl_okn\");
                                                            obj.style.display = \"block\"
                                                    </script>";
                                    }

                                }
                                break;
                        }
                    }
                    ?>


                    <h3 class="section_suptitle newbec">Добавить/Удалить администратора</h3>
                    <form class="form" action="adminpaneltobd.php#add_dell" method="post">
                        <div>(В базе должен оставаться хотя бы 1 администратор!)</div>
                        <select name="adminsel" class="select">
                            <option class="option" name="add">Добавить</option>
                            <option class="option" name="dell">Удалить</option>
                        </select>
                        <input class="input_admin" type="text" name="login_admin" placeholder="Username">
                        <input class="input_admin" type="password" name="pass_admin"  placeholder="Password">
                        <input class="input_btn" type="submit" name="btnlog" value="Добавить/Удалить">
                        <?php
                        if(isset($_POST['login_admin']))
                        {
                            $adminsel = $_POST['adminsel'];
                            switch($adminsel) {
                                case "Добавить":
                                    {
                                        $login_admin=$_POST["login_admin"];
                                        $pass_admin=$_POST["pass_admin"];

                                        if(mb_strlen($login_admin) < 4 || mb_strlen($login_admin) > 15){
                                        }else{
                                            $pass_admin = md5($pass_admin."hgtfrdesrtu342");//создается хеш

                                            require "connect.php";
                                            $mysql->query("INSERT INTO `admin_users` (`login`, `pass`)
                                            VALUES ('$login_admin', '$pass_admin')")or die($mysql->error);
                                            echo("<div class='section_suptitle newbecst results'>Администратор $login_admin добавлен</div>");
                                            $mysql->close();
                                        }

                                    }
                                    break;
                                case "Удалить":
                                    {
                                        $login_admin=$_POST["login_admin"];
                                        $pass_admin=$_POST["pass_admin"];
                                        $pass_admin = md5($pass_admin."hgtfrdesrtu342");//создается хеш

                                        require "connect.php";
                                        $mysql->query("DELETE FROM `admin_users` WHERE login='$login_admin' AND pass='$pass_admin'")or die($mysql->error);
                                        echo("<div class='section_suptitle newbecst results'>Администратор $login_admin удален</div>");
                                        $mysql->close();
                                    }
                                    break;
                            }
                        }
                        ?>
                    </form>

                </div>
            </div>
        </div>


    <div class="container" id="update">
        <div class="content_container newbec">
            <div class="section_heder width">
                <h3 class="section_suptitle newbec" >Обновить комплектующие</h3>
                <form class="form" action="adminpaneltobd.php#update" method="post">
                    <div class="beetwin_adm">

                        <div class="text">
                            <div>Выберите таблицу для работы:</div>
                            <select name="tablself" class="select">
                                <option class="option" name="prozesor">prozesor</option>
                                <option class="option" name="videokarta">videokarta</option>
                                <option class="option" name="operativnaypamyt">operativnaypamyt</option>
                                <option class="option" name="nakopitel">nakopitel</option>
                            </select>
                        </div>

                        <div class="text">
                            <div>Выберите Rang:</div>
                            <select name="rangsel" class="select">
                                <option class="option" name="0">0</option>
                                <option class="option" name="1">1</option>
                                <option class="option" name="2">2</option>
                                <option class="option" name="3">3</option>
                                <option class="option" name="4">4</option>
                                <option class="option" name="5">5</option>
                                <option class="option" name="6">6</option>
                            </select>
                        </div>

                        <div class="text">
                            <div>Выберите Class:</div>
                            <select name="classsel" class="select">
                                <option class="option" name="null">0</option>
                                <option class="option" name="one">1</option>
                            </select>
                        </div>

                        <div class="text">
                            <div>Введите имя нового комплектующего:</div>
                            <input class="input_admin" type="text" name="name_of_prod" placeholder="Name">
                        </div>

                    </div>
                    <input class="input_btn" type="submit" name="btnlog" value="Обновить">
                    <?php
                    if(isset($_POST['tablself']) )
                    {
                        $tablself = $_POST['tablself'];
                        $classsel = $_POST['classsel'];
                        $rangsel = $_POST['rangsel'];
                        $name_of_prod = $_POST['name_of_prod'];

                        require "connect.php";
                        $mysql->query("UPDATE `$tablself` SET naimen='$name_of_prod' WHERE rang='$rangsel' AND class='$classsel'")or die($mysql->error);
                        echo("<div class='section_suptitle newbecst results'>Данные обновлены</div>");
                        $mysql->close();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>


    <div class="container" id="entr_table">
        <div class="content_container newbec">
            <div class="section_heder width">
                <h3 class="section_suptitle newbec">Вывести содержимое таблицы</h3>
                <form class="form" action="adminpaneltobd.php#entr_table" method="post">
                    <div>

                        <div class="text">
                            <div>Выберите таблицу для работы:</div>
                            <select name="tablsel" class="select">
                                <option class="option" name="prozesor">prozesor</option>
                                <option class="option" name="videokarta">videokarta</option>
                                <option class="option" name="operativnaypamyt">operativnaypamyt</option>
                                <option class="option" name="nakopitel">nakopitel</option>
                            </select>
                        </div>

                    </div>
                    <input class="input_btn" type="submit" name="btnlog" value="Просмотреть">

                    <?php
                    if(isset($_POST['tablsel']) )
                    {
                        $adminsel = $_POST['tablsel'];
                        require "connect.php";
                        $result = $mysql->query("SELECT * FROM `$adminsel`") or die($mysql->error);
//                        $tablsel = $result->fetch_assoc();
                            $rows = mysqli_num_rows($result); // количество полученных строк
                            echo ("<div class='section_suptitle newbecst results'> $adminsel </div>");
                                echo "<div class='vir_ser'><table><tr><th>Id</th><th>Название</th><th>Rang</th><th>Class</th></tr>";
                                for ($i = 0 ; $i < $rows ; ++$i)
                                {
                                    $row = mysqli_fetch_row($result);
                                    echo "<tr>";
                                    for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
                                    echo "</tr>";
                                }
                                echo "</table></div>";
                            $mysql->close();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

</section>



</body>
</html>