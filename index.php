<!DOCTYPE html>
<html lang="ru">

<head>
    <? echo '<title>Umbrella corp</title>' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение  -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header id="main-header">
        <h1 id="menu">
            <a href="index.php">Меню</a>
        </h1>

        <ul class="lists" id="header-list">
            <li><a href="<?php
                    $name='Авторизация';
                    $link='Login\login.php';
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
                    $link='Feedback\feedback.php';
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
                    $link='Information\information.php';
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
                    $link='Calculations\calculations.php';
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

    <main id="main-content">
        <table id="table-corps">
            <caption class="signature">Таблица филлиалов</caption>
            <tr> <th>Филлиал</th> <th>Местоположение</th> <th>Учрежден</th> </tr>
            <tr> <td>Paraguas Line</td> <td>Средиземное море</td> <td>Поздние 1980-е</td> </tr>
            <tr> <td>Umbrella Europe</td> <td>Европа</td> <td>До 1998</td> </tr>
            <tr> <td>Umbrella Industries</td> <td>-</td> <td>До 1998</td> </tr>
        </table>
        <p>Наши основатели: 
            <?php
                $creators = array(
                    "Освелл Э. Спенсер",
                    "Джеймс Маркус",
                    "Эдвард Эшфорд");
                foreach ($creators as $n => $row) {
                    echo $row . ', ';
                }
            ?>    
        </p>

        <div id="main-photo">
            <p class="text">
                Текущий руководитель: Альберт Вескер
            </p>
            <? echo '<img src="Images\\'.(date(time()) % 2).'.jpg">' ?>
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