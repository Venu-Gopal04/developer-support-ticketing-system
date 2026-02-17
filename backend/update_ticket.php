<?php
require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];
$status = $data["status"];

$stmt = $db->prepare(
    "UPDATE tickets SET status = ? WHERE id = ?"
);
$stmt->execute([$status, $id]);

echo json_encode(["success" => true]);
