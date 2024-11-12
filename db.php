<?php
$host = 'btmv8drq0pardbdcjayg-mysql.services.clever-cloud.com'; 
$db   = 'btmv8drq0pardbdcjayg'; 
$user = 'u4izqf7ousho9omf';      
$pass = 'EMeGrOf0BiX1i2VxnhXP';          
$charset = 'utf8mb4';

// Set up the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Handle connection error
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
