<?php
require_once __DIR__ . '/db.php';
header('Content-Type: application/json');
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';
$status = $_POST['status'] ?? 'open';

if ($title === '' || $description === '') {
    echo json_encode([
        "success" => false,
        "error" => "Title and description are required"
    ]);
    exit;
}

$stmt = $conn->prepare(
    "INSERT INTO tickets (title, description, status) 
     VALUES (:title, :description, :status)"
);

$stmt->bindValue(':title', $title, SQLITE3_TEXT);
$stmt->bindValue(':description', $description, SQLITE3_TEXT);
$stmt->bindValue(':status', $status, SQLITE3_TEXT);

$result = $stmt->execute();

echo json_encode(["success" => true]);
