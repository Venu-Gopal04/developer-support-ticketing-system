<?php
require_once "db.php";

$id = $_GET["id"] ?? null;

$stmt = $db->prepare("DELETE FROM tickets WHERE id = ?");
$stmt->execute([$id]);

echo json_encode(["success" => true]);
