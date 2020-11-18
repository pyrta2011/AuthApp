<?php
use App\Services\Page;
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php
        Page::page('head');
        ?>
        <title>500</title>
    </head>
    <body>
        <?php
        Page::page('nav');
        ?>
        <div class="container">
            <h1 class="mt-4">500 - Ошибка на сервере</h1>
        </div>
    </body>
</html>
