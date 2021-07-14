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
    <div class="row">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="../index.php?page=1">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php?page=2">Auth</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php?page=3">Hotels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php?page=4">Disabled</a>
            </li>
        </ul>
    </div>
    <?
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
<?php
    if (!isset($_SESSION['isAuth'])) {
?>
<div class="row">
    <form action="../controllers/authController.php" method="post" class="col-md-4 offset-4 mt-5">
        <div class="mb-3">
            <label for="authLogin" class="form-label">Login</label>
            <input name="authLogin" class="form-control" id="authLogin">
        </div>
        <div class="mb-3">
            <label for="authPassword" class="form-label">Password</label>
            <input name="authPassword" class="form-control" id="authPassword">
        </div>
        <button name="authUser" value="Добавить" type="submit" class="btn btn-primary">LogIn</button>
    </form>
</div>
<? } elseif ($_SESSION['isAuth']) { ?>
<div class="row">
    <form action="../controllers/authController.php" method="post" class="col-md-4 offset-4 mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome!</h4>
            <p>Уважаемый <?=$_SESSION['login'];?></p>
        </div>
        <button name="exitUser" value="Добавить" type="submit" class="btn btn-danger">Exit</button>
    </form>
</div>
<? } elseif ($_SESSION['isAuth'] == false) { ?>
        <form action="../controllers/authController.php" method="post" class="col-md-4 offset-4 mt-5">
            <div class="mb-3">
                <label for="authLogin" class="form-label">Login</label>
                <input name="authLogin" class="form-control" id="authLogin">
            </div>
            <div class="mb-3">
                <label for="authPassword" class="form-label">Password</label>
                <input name="authPassword" class="form-control" id="authPassword">
            </div>
            <button name="authUser" value="Добавить" type="submit" class="btn btn-primary">LogIn</button>
        </form>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Shit!</h4>
            <p>Что-то пошло не так!</p>
        </div>
<? } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>