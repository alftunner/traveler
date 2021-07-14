<?php
function connect ($host, $dbname, $userName, $password) {
    try {
        return new PDO(
            'mysql:host='.$host.';dbname='.$dbname.'',
            $userName,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        echo 'Невозможно установить соединение с базой данных'.$e;
    }
}
