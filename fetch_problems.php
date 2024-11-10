<?php
session_start();
include 'db.php';

header('Content-Type: application/json');

try {
    // Fetch the problems from the database using the correct column names
    $stmt = $pdo->query("SELECT market_type, owner_name, problem, created_at FROM problems");
    $problems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($problems);
} catch (Exception $e) {
    error_log($e->getMessage(), 3, '/path/to/your/error.log'); // Make sure this path is writable
    echo json_encode([]);
}
?>
