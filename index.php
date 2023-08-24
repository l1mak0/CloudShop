<?php
session_start();
var_dump($_SESSION['user_id']);
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Главная</title>
        <link rel="stylesheet" href="./assets/styles/style.css">
    </head>
    <body>
        <form action="./php/logout.php" method="post"><input type="submit" value="Выйти"></form>
        <?php require './moduls/header.php'?>
        <div class="container">
            <div class="item">
                <img src="" alt="">
                <h4 class="title_item">Название товара</h4>
                <div class="rating">4.5⭐ </div>
                <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eaque eveniet incidunt perspiciatis quia soluta.</span>
                <a href="#">Подробнее</a>
            </div>
        </div>
    </body>
</html>
