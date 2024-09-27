<!DOCTYPE html>
<html lang="ru">

<head>
    <? echo '<title>Umbrella corp</title>' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение  -->
    <link rel="stylesheet" href="styleFeedbacksend.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<a href="<?php
        $name='Main page';
        $link='..\index.php';
        $current_page=false;

        echo $link;

        ?>"><?php

        if( $current_page )
            echo ' class="selected_menu"';
            echo $name;
        ?>
    </a>
    <div id="background">
        <?php
            echo '<p> Здравствуйте, '.$_POST['name'].'</p>';

            if ($_POST['text-type'] == 'appeal'){
                echo '<p>Мы учтем Ваши пожелания:</p>';
                echo '<textarea>'.$_POST['text'].'</textarea>';
            }else{
                echo '<p>Мы учтем Вашу жалобу:</p>';
                echo '<textarea>'.$_POST['text'].'</textarea>';
            }
            if (isset($_POST['file']) & $_POST['file'] != '')
            echo '<p>Вы приложили следующий файл: '.$_POST['file'].'</p>';

            echo '<a class="btn" href="feedback.php?N='.$_POST['name'].'&E='.$_POST['email'].'&S='.$_POST['from'].'">Заполнить снова</a>';
        ?>
    </div>
</body>