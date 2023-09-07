<?php
require './db.php';
session_start();
$id = $_POST['id'];
delete(
    'DELETE FROM card WHERE id = :id',
    ['id' => $id]
);
header('location: ../pages/profile.php?id='.$_SESSION['user_id']);
?>