<?php
session_start();
include 'db.php';

$stmt = $pdo->query("SELECT owner_name, problem, owner_email FROM problems");
$problems = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($problems);
?>
