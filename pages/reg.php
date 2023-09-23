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
        <div class="sgn">
            <span CLASS="sign">SIGN IN</span><br>
            <div class="reg_block">
                    <input type="text" name="fio" placeholder="ФИО"><br>
                    <input type="text" name="login" placeholder="Логин"><br>
                    <input type="password" name="password" placeholder="Пароль"><br>
            </div>
            <div class="btn-reg">
                <input type="submit" value="Зарегистрироваться">
            </div>

    </form>
    <a href="./login.php">Авторизация</a>
</div>
</div>
</body>
</html>

