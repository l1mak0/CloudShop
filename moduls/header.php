<?php
$id = $_SESSION['user_id'];
//var_dump($_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] != '/') $home = '../'; else $home = './';
if (!empty($id)) {
    if ($_SERVER['REQUEST_URI'] != '/') $profile = '../profile.php?id=' . $id; else $profile = './pages/profile.php?id=' . $id;
} else {
    if ($_SERVER['REQUEST_URI'] != '/') $profile = './login.php'; else $profile = './pages/login.php';
}
if ($_SESSION['is_admin'] == true) {
    if ($_SERVER['REQUEST_URI'] != '/') $add = './add_product.php'; else $add = './pages/add_product.php';
} else {
    $add = $home;
}
$productsForSearch = select('SELECT title FROM products');

?>
<header>
    <a href="<?= $home ?>">Byketberry</a>
    <form action="../php/search.php" method="get">
        <input name="name" type="text" list="search" placeholder="Поиск">
        <input type="submit" value="Поиск">
    </form>
    <datalist id="search">
        <?php foreach ($productsForSearch as $title): ?>
            <option value="<?= $title['title'] ?>"></option>
        <?php endforeach; ?>
    </datalist>
    <a href="<?php echo $add ?>">Добавление товара</a>
    <a href="">О нас</a>
    <a href="">Контакты</a>
    <a href="<?= $profile ?>">💼</a>
</header>


