<?php
session_start();
require './db.php';
if (!empty($_POST['editBtn'])){
    $user_id = $_SESSION['user_id'];
    $old_password = select('SELECT password FROM users WHERE id = :id', ['id' => $user_id]);

    $confirm_password = password_verify($_POST['confirmPassword'], $old_password);

    if ($confirm_password){
        if ($_POST['newPassword'] == $_POST['oldPassword']){
            update('UPDATE users SET password = :newPassword', ['newPassword' => password_hash($_POST['newPassword'], PASSWORD_DEFAULT)]
            );
            header('location: ../pages/profile.php?id='.$user_id);
        } else {
            echo 'Пароли не совподают!';
        }
    } else {
        echo 'На правильный текущий пароль!';
    }
}
//$2y$10$FNYVePFjUV4mlcDWKQDnoeTvK256pzK8KDmNeOVl8d1H1.CObAxWm
?>
<form method="post">
    <label>
        <input type="text" name="oldPassword" placeholder="Введите старый пароль" required>
    </label>
    <label>
        <input type="text" name="newPassword" placeholder="Введите новый пароль" required>
    </label>
    <label>
        <input type="text" name="confirmPassword" placeholder="Повторите новый пароль" required>
    </label>
    <input type="submit" value="Изменить" name="editBtn">
</form>
