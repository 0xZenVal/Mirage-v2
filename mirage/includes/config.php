<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'mirage_db');
define('DB_USER', 'your_mysql_username');
define('DB_PASS', 'your_mysql_password');
define('DB_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
