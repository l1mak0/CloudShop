<?php
require './db.php';
session_start();

$fio = $_POST['fio'];
$login = $_POST['login'];
$password = $_POST['password'];

if (!empty($fio)) {
    if (!empty($login)) {
        if (!empty($password)) {
            $users = select('SELECT * FROM users WHERE login = :login', ['login' => $login]);
            if (empty($users)){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $user_id = insert(
                    'INSERT INTO users (fio, login, password) VALUES (:fio, :login, :password)',
                    [
                        'fio' => $fio,
                        'login' => $login,
                        'password' => $password
                    ]
                );
                $_SESSION['user_id'] = $user_id;
                header('location: ../');
            } else{
                $_SESSION['error'] = 'Такой пользователь уже существует!';
                header('location: ../pages/reg.php');
            }
        } else {
            $_SESSION['error'] = 'Укажите свой пароль!';
            header('location: ../pages/reg.php');
        }
    } else {
        $_SESSION['error'] = 'Укажите свой логин!';
        header('location: ../pages/reg.php');
    }
} else {
    $_SESSION['error'] = 'Укажите своё ФИО!';
    header('location: ../pages/reg.php');
}