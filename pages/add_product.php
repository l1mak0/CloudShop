<?php
session_start();
require '../php/db.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Добавление товара</title>
</head>
<body>
    <?php require "../moduls/header.php"?>
    <form class="add" action="../php/addProduct.php" method="post" enctype="multipart/form-data">
        <label class="title">Название товара<input type="text" placeholder="Название товара" name="title" required></label>
        <label class="desc_prod">Описание товара<textarea placeholder="Описание товара" rows="10" cols="30" name="desc" required></textarea></label>
        <label class="grade">Рейтинг<input type="number" name="grade" step="0.1" required></label>
        <label class="price_prod">Цена<input type="number" name="price" required></label>
        <label class="cover">Обложка<input type="file" name="cover" required></label>
        <input type="submit" value="Добавить товар">
    </form>

</body>
</html>
