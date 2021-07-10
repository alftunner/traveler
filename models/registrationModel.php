<?php
require_once '../models/baseModel.php';
function registration ($login, $password) {
    $connect = connect('localhost', 'traveler', 'root', '');
    try {
        $query = "INSERT INTO users (login, password) VALUES (:login, :password)";
        $insertUser = $connect->prepare($query);
        $insertUser->execute(['login'=>$login, 'password'=>$password]);
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
