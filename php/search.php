<?php
require './db.php';
$name = $_GET['name'];
$id = select('SELECT id FROM products WHERE title = :title',
    ['title' => $name]
);
if (!empty($id)){
    header('location: ../pages/product.php?id='.$id[0]['id']);
} else{
    header('location: ../');
};
