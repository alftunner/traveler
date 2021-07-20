<?php
// включим отображение всех ошибок
error_reporting (E_ALL);

// подключаем конфиг
include ('config.php');

// Соединяемся с БД
$dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$dbObject->exec('SET CHARACTER SET utf8');

// подключаем ядро сайта
include (SITE_PATH . DS . 'core' . DS . 'core.php');

// Загружаем router
$router = new Router();
// задаем путь до папки контроллеров.
$router->setPath (SITE_PATH . 'controllers');
// запускаем маршрутизатор
$router->start();
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Traveler</title>
</head>
<body>
<div class="container">
    <?if ($_GET['page'] != 2) { ?>
    <div class="row">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=1">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=2">Auth</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=3">Hotels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=4">Disabled</a>
            </li>
        </ul>
    </div>
    <?
    }
        switch ($_GET['page']) {
            case '1':
                include_once 'views/registrationView.php';
                break;
            case '2':
                include_once 'views/authView.php';
                break;
        }
    ?>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
