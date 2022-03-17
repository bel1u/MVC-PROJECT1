<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= (isset($title) ? $title : 'Главная страница') ?></title>
    <?php
        $css[] = 'bootstrap.css';
        $javascript[] = ['src' => 'bootstrap.js'];

        if(isset($css))
            foreach($css as $item)
                echo "<link rel='stylesheet' href='/assets/css/{$item}'>";
        if(isset($javascript))
            foreach($javascript as $item)
                echo "<script src='/assets/js/{$item['src']}' " . ($item['defer'] ? 'defer' : '' ) . "></script>"
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Мой блог</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Авторизация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</nav>