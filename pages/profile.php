<?php
session_start();
require '../php/db.php';
$user = select('SELECT login, fio FROM users WHERE id = :id', ['id'=>$_GET['id']]);
$cards = select('SELECT products_id FROM card WHERE user_id = :id', ['id'=>$_GET['id']]);
$i = 0;
while ($i < count($cards)){
    $id = $cards[$i]['products_id'];
    $cards[$i]['products_id'] = select('SELECT * FROM products WHERE id = :id',
                        ['id' => $id]);
    $i++;
}
var_dump($cards);
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
    <div class="container" style="width: 1200px; margin: 0 auto">
        <h1><?= $user[0]['fio'] ?></h1>
        <span>@<?= $user[0]['login'] ?></span>
        <form action="../php/logout.php" method="post"<input type="submit" value="Выйти"></form>
        <div class="card">
            <?php foreach ($cards as $card): ?>
            <?php ?>
                <div class="card_item">
                    <img src="" alt="">
                    <h3 class="card_title">title</h3>
                    <span class="card_desc">desc</span>
                    <span class="card_price">price</span>
                    <form action=""><input type="submit" value="🗑"></form>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>
