<?php
session_start();
require '../php/db.php';

$id = $_GET['id'];
$product = select('SELECT * FROM products WHERE id = :id', ['id'=>$id]);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Document</title>
</head>
<body>
    <?php require '../moduls/header.php'?>
    <?php foreach ($product as $row):?>
        <h3><?= $row['title']?></h3>
        <span><?= $row['description']?></span>
        <span><?= $row['grade']?>⭐</span>
        <span><?= $row['price']?>₽</span>
        <form action=""><input type="submit" value="Купить"></form>
    <?php endforeach;?>
</body>
</html>
