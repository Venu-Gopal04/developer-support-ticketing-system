<?php
require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$title = $data["title"] ?? "";
$description = $data["description"] ?? "";

$stmt = $db->prepare(
    "INSERT INTO tickets (title, description) VALUES (?, ?)"
);
$stmt->execute([$title, $description]);

echo json_encode(["success" => true]);
