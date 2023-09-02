<?php
session_start();
$user_id = $_SESSION['user_id'];
$product_id = $_POST['id'];
require './db.php';

insert(
    'INSERT INTO card (user_id, products_id) VALUES (:user_id, :products_id)',
    [
        'user_id'=> $user_id,
        'products_id'=>$product_id
    ]
);
header('location: ../pages/product.php?id='.$product_id);
?>

