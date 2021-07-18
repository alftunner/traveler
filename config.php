<?php
const DS = DIRECTORY_SEPARATOR; // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта
const DB_HOST = 'localhost';
const DB_NAME = 'traveler';
const DB_USER = 'root';
const DB_PASS = '';