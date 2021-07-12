<?php
var_dump($_SESSION);
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
