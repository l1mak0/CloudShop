<?php
session_start();
require './db.php';

$login = $_POST['login'];
$password = $_POST['password'];

if (!empty($login)){
    if (!empty($password)){
        $user = select('SELECT * FROM users WHERE login = :login', ['login' => $login]);
        if (!empty($user)){
            $_SESSION['user_id'] = $user[0]['id'];
            header('location: ../');
        }else{
            $_SESSION['error'] = 'Пользователь не найден!';
            header('location: ../pages/login.php');
        }
    } else {
        $_SESSION['error'] = 'Введите пароль!';
        header('location: ../pages/login.php');
    }
} else {
    $_SESSION['error'] = 'Введите логин!';
    header('location: ../pages/login.php');
}