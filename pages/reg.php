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
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="reg">
        <span style="color: red"> <?php if (!empty($_SESSION['error'])) echo $_SESSION['error']; else echo "" ?></span>
        <form action="../php/reg.php" method="post">
            <div class="reg_block">
                <label>
                    Введите ФИО:<br>
                    <input type="text" name="fio">
                </label><br>
                <label>
                    <label>
                        Введите логин:<br>
                        <input type="text" name="login">
                    </label><br>
                    <label>
                        Введите пароль:<br>
                        <input type="password" name="password">
                    </label><br>
                    <input type="submit" value="Зарегистрироваться">
        </form>
        <a href="./login.php">Авторизация</a>
            </div>
    </div>
</body>
</html>

