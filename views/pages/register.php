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
    <title>Регистрация</title>
</head>
<body>
<?php
Page::page('nav');
?>
<form action="/auth/register" method="post" enctype="multipart/form-data">
    <div class="container mt-4">
        <h1 class="mt-4">Регистрация</h1>
        <div class="form-group mt-4">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group mt-4">
            <label for="username">Логин</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Аватар</label>
            <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group mt-4">
            <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group mt-4">
            <label for="password_confirm">Подтверждение пароля</label>
            <input type="password" name="password_confirm" class="form-control" id="password_confirm">
        </div>
        <button type="submit" class="btn btn-primary">Регистрация</button>
    </div>
</form>
</body>
</html>
