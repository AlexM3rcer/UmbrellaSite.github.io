<!DOCTYPE html>
<html lang="ru">

<head>
    <? echo '<title>Umbrella corp</title>' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение  -->
    <link rel="stylesheet" href="styleInformation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                    $link='information.php';
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

        <?php
            include "..\db.php";
            $result = mysqli_query($mysql, "SELECT * FROM `terms`");
        ?>

        <form action="feedbacksend.php" method="POST" id="feedback-form" POST>

            <label><input type="text" id="name-form" name="name">Термин</label>

            <label><input type="text" id="name-form" name="name"> URL картинки</label>

            <label><textarea name="text" id="textarea-form"></textarea>Описание</label>
            

            <input type="submit" id="submit-form" name="submit" value="Добавить">
        </form>

        <div id="termins">
            <?php 
                while($name = mysqli_fetch_assoc($result)){
            ?>
            <div class="term">
                <img  title="<?php echo $name['name'];?>" src="..\Images\<?php echo $name['url'];?>"/>
                <h2><?php echo $name['name'];?></h2>
                <p><?php echo $name['description'];?><p>
            </div>
            <?php
                }
            ?>
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