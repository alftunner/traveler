<?php
require_once '../models/registrationModel.php';
$resultAdd = '';
if (!empty($_REQUEST['addNewUser'])) {
    if ($_POST['password'] == $_POST['confirm']) {
        if (registration($_POST['login'], $_POST['password'])) {
            $resultAdd = 'Пользователь '.$_POST['login'].' успешно зарегистрирован';
            include "../views/successRegistration.php";
        } else {
            $resultAdd = 'Пользователь '.$_POST['login'].' не зарегистрирован';
            include "../views/errorRegistration.php";
        }
    }
}