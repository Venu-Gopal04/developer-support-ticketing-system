<?php
require_once __DIR__ . '/db.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(["success" => false, "error" => "ID required"]);
    exit;
}

$stmt = $db->prepare("DELETE FROM tickets WHERE id = ?");
$stmt->execute([$id]);

echo json_encode(["success" => true]);
