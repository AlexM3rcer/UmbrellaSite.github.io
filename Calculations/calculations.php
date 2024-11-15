<!DOCTYPE html>
<html lang="ru">

<head>
    <? echo '<title>Umbrella corp</title>' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение  -->
    <link rel="stylesheet" href="styleCalculations.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="app.js" defer></script>
</head>
<body>
    <header id="main-header">
        <h1 id="menu">
            <a href="..\index.php">Меню</a>
        </h1>

        <ul class="lists" id="header-list">
            <li><a href="<?php
                    $name='Авторизация';
                    $link='..\Login\login.php';
                    $current_page=false;

                    echo $link;

                    ?>"><?php

                    if( $current_page )
                        echo ' class="selected_menu"';
                        echo $name;
                    ?>
                </a>
            </li>
            <li><a href="<?php
                    $name='Фидбэк';
                    $link='..\Feedback\feedback.php';
                    $current_page=false;

                    echo $link;

                    ?>"><?php

                    if( $current_page )
                        echo ' class="selected_menu"';
                        echo $name;
                    ?>
                </a>
            </li>
            <li><a href="<?php
                    $name='Информационный Центр';
                    $link='..\Information\information.php';
                    $current_page=false;

                    echo $link;

                    ?>"><?php

                    if( $current_page )
                        echo ' class="selected_menu"';
                        echo $name;
                    ?>
                </a>
            </li>
            <li>
            <a href="<?php
                    $name='Вычисления';
                    $link='calculations.php';
                    $current_page=false;

                    echo $link;

                    ?>"><?php

                    if( $current_page )
                        echo ' class="selected_menu"';
                        echo $name;
                    ?>
                </a>
            </li>
        </ul>
    </header>

    <main>
        <div class="calc">
            <label>Возведение в степень<input type="text" name="pow" id="pow"></label>
            <input type="button" value="Ответ:" id="powB" onclick="pows();"><p id="powA"></p>

            <label>Наибольший общий делитель<input type="text" name="biggest" id="biggest"></label>
            <input type="button" value="Ответ:" id="biigestB" onclick="biggestf();"><p id="biggestA"></p>

            <label>Наименьшая цифра числа<input type="text" name="lowwest" id="lowwest"></label>
            <input type="button" value="Ответ:" id="lowwestB" onclick="lowwestf();"><p id="lowwestA"></p>

            <label>Плюрализация<input type="text" name="plur" id="plur"></label>
            <input type="button" value="Ответ:" id="plurB" onclick="plurf();"><p id="plurA"></p>

            <label>Число Фибоначи<input type="text" name="fib" id="fib"></label>
            <input type="button" value="Ответ:" id="fibB" onclick="fibf();"><p id="fibA"></p>
        </div>
    </main>

    <footer id="info">
        <p id="slogan">
            Our Business Is Life Itself
        </p>
        <ul class="lists">
            <li>+7 (985) 899-07-18</li>
            <li>froykergames@gmail.com</li>
        </ul>
        <?php
        date_default_timezone_set('Europe/Moscow');
        echo '<p>Сформировано '.date('m/d/Y G-i:s', time()).'</p>';
        ?>
    </footer>
</body>