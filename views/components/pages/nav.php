<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">PyrtaAlex</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="btn btn-outline-info" href="/">Главная<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
    <div class="d-flex">
        <?php
        if (!$_SESSION['user']) {
        ?>
            <a class="btn btn-outline-info mr-2" href="/login">Войти</a>
            <a class="btn btn-outline-info" href="/register">Регистрация</a>
        <?php
        } else {
        ?>
            <a class="btn btn-outline-primary mr-2" href="/profile">Профиль</a>
            <form action="/auth/logout" method="post">
                <button class="btn btn-outline-danger">Выйти</button>
            </form>
        <?php
        }
        ?>
    </div>
</nav>
