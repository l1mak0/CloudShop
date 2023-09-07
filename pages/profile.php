<?php
session_start();
require '../php/db.php';
$user = select('SELECT login, fio FROM users WHERE id = :id', ['id'=>$_GET['id']]);
$cards = select('SELECT products_id, id FROM card WHERE user_id = :id', ['id'=>$_GET['id']]);
$i = 0;
while ($i < count($cards)){
    $id = $cards[$i]['products_id'];
    $products[$i] = select('SELECT * FROM products WHERE id = :id',
                        ['id' => $id]);
    $products[$i][0][] = ['card_id' => $cards[$i]['id']];
    $i++;
}
//var_dump($cards[0]);
//var_dump($products[0][0]['title']);
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
            <?php foreach ($products as $product): ?>
                <div class="card_item">
                    <img src="data:image/png;base64,<?= $product[0]['cover'] ?>" alt="">
                    <h3 class="card_title"><?= $product[0]['title'] ?></h3>
                    <span class="card_desc"><?= $product[0]['description'] ?></span>
                    <span class="card_price"><?= $product[0]['price'] ?> ₽</span>
                    <form action="../php/delete.php" method="post"><input style="display: none" type="text" value="<?= $product[0][0]['card_id'] ?>" name="id"><input type="submit" value="🗑"></form>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>
