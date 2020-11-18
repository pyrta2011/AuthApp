<?php
use App\Services\Page;
use App\Services\Router;

if ($_SESSION['user'] && $_SESSION['user']['group'] != 2) {
    Router::redirect('/profile');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <?php
    Page::page('head');
    ?>
    <title>Панель администратора</title>
</head>
<body>
<?php
Page::page('nav');
?>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Dashboard</h1>
    </div>
</div>
</body>
</html>