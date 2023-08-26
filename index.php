<?php
session_start();
require './php/db.php';
$products = select('SELECT * FROM products');
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
            <?php foreach ($products as $product): ?>
            <div class="item">
                <img src="" alt="">
                <h4 class="title_item"><?= ucfirst($product['title'])?></h4>
                <div class="rating"><?= ucfirst($product['grade'])?>⭐ </div>
                <span class="desc"><?= ucfirst($product['description'])?></span>
                <span class="price"><?= ucfirst($product['price'])?>₽</span>
                <a href="./pages/product.php?id=<?= $product['id'] ?>">Подробнее</a>
            </div>
            <?php endforeach;?>
        </div>
    </body>
</html>
