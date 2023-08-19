<?php
session_start();
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Авторизация</title>
    </head>
    <body>
        <span style="color: red"> <?php if(!empty($_SESSION['error']))  echo $_SESSION['error']; else echo "" ?></span>
        <form action="../php/login.php" method="post">
            <label>
                Введите логин:<br>
                <input type="text" name="login">
            </label><br>
            <label>
                Введите пароль:<br>
                <input type="password" name="password">
            </label><br>
            <input type="submit" value="Авторизоваться">
        </form>
    <a href="./reg.php">Регистрация</a>
    </body>
</html>

