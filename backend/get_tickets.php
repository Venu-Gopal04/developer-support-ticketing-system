<?php
require_once "db.php";

$stmt = $db->query("SELECT * FROM tickets ORDER BY created_at DESC");
$tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($tickets);
