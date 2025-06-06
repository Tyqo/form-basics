<?php
// Database connection parameters
$host = 'localhost';
$db   = 'form-basics';
$user = '****';
$pass = '****';
$charset = 'utf8mb4';

// Create a new PDO instance
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


