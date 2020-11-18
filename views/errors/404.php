<?php
use App\Services\Page;
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php
        Page::page('head');
        ?>
        <title>404</title>
    </head>
    <body>
        <?php
        Page::page('nav');
        ?>
        <div class="container">
            <h1 class="mt-4">404 - Страница не найдена</h1>
        </div>
    </body>
</html>
