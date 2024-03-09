<?php
$db_host = 'localhost';
$db_name = 'fura_db';
$db_username = 'root';
$db_password = '';

$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);