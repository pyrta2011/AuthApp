<?php
use App\Services\Page;
use App\Services\Router;

if (!$_SESSION['user']) {
    Router::redirect('/login');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <?php
    Page::page('head');
    ?>
    <title>Профиль</title>
</head>
<body>
<?php
Page::page('nav');
?>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Hello, <?= $_SESSION['user']['username'] ?></h1>
        <img src="<?= $_SESSION['user']['avatar'] ?>" alt="" height="300">
    </div>
</div>
</body>
</html>