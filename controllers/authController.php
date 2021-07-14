<?php
require_once '../models/authModel.php';
class AuthClass {
    public function isAuth() {
        if (isset($_SESSION['isAuth'])) {
            return $_SESSION['isAuth'];
        } else {
            return false;
        }
    }
    public function authUser($login, $password) {
        if (auth($login, $password)) {
            $_SESSION['isAuth'] = true;
            $_SESSION['login'] = $login;
            return true;
        } else {
            $_SESSION['isAuth'] = false;
            return false;
        }
    }
    public function getLogin() {
        if ($this->isAuth()) {
            return $_SESSION['login'];
        }
    }
    public function logOut() {
        $_SESSION = [];
    }
}

$auth = new AuthClass();
if (!empty($_POST['authUser'])) {
    $auth->authUser($_POST['authLogin'], $_POST['authPassword']);
} elseif (!empty($_POST['exitUser'])) {
    $auth->logOut();
}
include_once "../views/authView.php";
?>
