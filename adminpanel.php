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
                </form>

            </div>
        </div>
    </div>

    <section class="section">
        <div class="container" id="add_dell">
            <div class="content_container newbec">
                <div class="section_heder width">

                    <h3 class="section_suptitle newbec">Добавить/Удалить администратора</h3>
                    <form class="form" action="adminpaneltobd.php#add_dell" method="post">
                        <div>(В базе должен оставаться хотя бы 1 администратор!)</div>
                        <select name="adminsel" class="select">
                            <option class="option" name="add">Добавить</option>
                            <option class="option" name="dell">Удалить</option>
                        </select>
                        <input class="input_admin" type="text" name="login_admin" placeholder="Username">
                        <input class="input_admin" type="password" name="pass_admin" id="pass1" placeholder="Password">
                        <input class="input_btn" type="submit" name="btnlog" value="Добавить/Удалить">
                    </form>

                </div>
            </div>
        </div>


        <div class="container" id="update">
            <div class="content_container newbec">
                <div class="section_heder width">
                    <h3 class="section_suptitle newbec">Обновить комплектующие</h3>
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
                                <div>Выберите Class:</div>
                                <select name="classsel" class="select">
                                    <option class="option" name="null">0</option>
                                    <option class="option" name="one">1</option>
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
                                <div>Введите имя нового комплектующего:</div>
                                <input class="input_admin" type="text" name="name_of_prod" placeholder="Name">
                            </div>

                        </div>
                        <input class="input_btn" type="submit" name="btnlog" value="Добавить">
                    </form>
                </div>
            </div>
        </div>

<!--    <div class="container">-->
<!--        <div class="content_container newbec">-->
<!--            <div class="section_heder width">-->
<!--                <h3 class="section_suptitle newbec">Удалить комплектующее:</h3>-->
<!--                <form class="form" action="adminpaneltobd.php" method="post">-->
<!--                    <div class="beetwin_adm">-->
<!---->
<!--                        <div class="text">-->
<!--                            <div>Выберите таблицу с которой хотите удалить комплектующее:</div>-->
<!--                            <select name="tablsel" class="select">-->
<!--                                <option class="option" name="prozesor">prozesorе</option>-->
<!--                                <option class="option" name="videokarta">videokarta</option>-->
<!--                                <option class="option" name="operativnaypamyt">operativnaypamyt</option>-->
<!--                                <option class="option" name="nakopitel">nakopitel</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!---->
<!--                        <div class="text">-->
<!--                            <div>Введите Id комплектующего(его можно узнать,просмотрев таблицу в которой оно находится).В каждой таблице должен оставаться хотя бы 1 элемент каждого из rang в каждом class:</div>-->
<!--                            <input class="input_admin" type="text" name="Id" placeholder="Id">-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                    <input class="input_btn" type="submit" name="btnlog" value="Удалить">-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


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
                </form>
            </div>
        </div>
    </div>

</section>



</body>
</html>