<?php
require_once __DIR__ . '/db.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'] ?? null;
$status = $data['status'] ?? null;

if (!$id || !$status) {
    echo json_encode(["success" => false, "error" => "Invalid input"]);
    exit;
}

$stmt = $db->prepare("UPDATE tickets SET status = ? WHERE id = ?");
$stmt->execute([$status, $id]);

echo json_encode(["success" => true]);
