<?php
require_once '../models/baseModel.php';
function auth ($login, $password) {
    $connect = connect('localhost', 'traveler', 'root', '');
    try {
        $query = "SELECT login, password from users";
        foreach ($connect->query($query) as $row) {
            var_dump($row);
            if ($login == $row['login'] && $password == $row['password']) {
                return true;
            }
        }
        return false;
    } catch (PDOException $e) {
        return false;
    }
}
