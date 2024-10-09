<?php
$host = 'localhost';       // Your database host
$db   = 'crud_blazter';   // Your database name
$user = 'root';   // Your database username
$pass = '';    // Your database password
$charset = 'utf8mb4';      // Set the charset to utf8mb4

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";  // Set charset in DSN
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $db = new PDO($dsn, $user, $pass, $options);  // Create the PDO connection
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();  // Handle connection error
}


