<!DOCTYPE html>
<html lang="ru">

<head>
    <? echo '<title>Umbrella corp</title>' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение  -->
    <link rel="stylesheet" href="styleFeedback.css">
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
        <form id="feedback-form">
            <label><input type="text" id="name-form" name="name">Name</label>
            <label><input type="text" id="email-form" name="email">Email</label>
            <label for="from">From what</label>
            
            <div id="radio-buttons">
                <label><input type="radio" id="from1-form" name="from">Employee</label>
                <label><input type="radio" id="from2-form" name="from">Invitation</label>
                <label><input type="radio" id="from3-form" name="from">Accidentally</label>
            </div>

            <select>
                <option value="complaint">Complaint</option>
                <option value="appeal">Appeal</option>
            </select>
            <label>Text</label>
            <textarea name="text" id="textarea-form"></textarea>

            <input type="file" id="file-form" name="file">

            <label><input type="checkbox" id="checkbox-form" name="agree">Agree</label>
            
            <input type="submit" id="submit-form" name="submit" value="Submit">
        </form>
    </div>
</body>