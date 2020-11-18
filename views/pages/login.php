<?php
use App\Services\Page;
use App\Services\Router;
if ($_SESSION['user']) {
    Router::redirect('/profile');
}
?>
<!doctype html>
<html lang="ru">
<head>
<?php
    Page::page('head');
?>
    <title>Авторизация</title>
</head>
<body>
<?php
    Page::page('nav');
?>
<form action="/auth/login" method="post">
    <div class="container mt-4">
        <h1 class="mt-4">Авторизация</h1>
        <div class="form-group mt-4">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email"">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </div>
</form>
</body>
</html>
