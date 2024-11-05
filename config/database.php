<?php 

define('DB_HOST','localhost');
define('DB_USER','Jan');
define('DB_PASS', 'password');
define('DB_NAME', 'php_development_1');

//Create a connection

$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//Check a connection

if($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

