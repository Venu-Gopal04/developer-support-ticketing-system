<?php
require_once(__DIR__ . "/db.php");



$sql = "SELECT * FROM tickets ORDER BY created_at DESC";
$result = $conn->query($sql);

$tickets = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tickets[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($tickets);
?>
