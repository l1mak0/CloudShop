<?php
var_dump($_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] != '/') $home = '../'; else $home = './';
if ($_SERVER['REQUEST_URI'] != '/') $profile = '../profile.php'; else $profile = './pages/profile.php';
if ($_SESSION['is_admin'] == true){
    if ($_SERVER['REQUEST_URI'] != '/') $add = './add_product.php'; else $add = './pages/add_product.php';
} else{
    $add = $home;
}
?>

<header>
    <a href="<?=$home?>">CloudShop</a>
    <form action="" method="get">
        <input type="text" placeholder="Поиск">
        <input type="submit" value="Поиск">
    </form>
    <a href="<?php echo $add?>">Добавление товара</a>
    <a href="<?=$profile?>">G</a>
</header>
