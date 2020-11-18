<?php
use App\Services\Page;
?>
<!doctype html>
<html lang="ru">
<head>
    <?php
    Page::page('head');
    ?>
    <title>Главная</title>
</head>
<body>
<?php
Page::page('nav');
?>
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Hello, Guest!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Войти</a>
        </div>
    </div>
</body>
</html>