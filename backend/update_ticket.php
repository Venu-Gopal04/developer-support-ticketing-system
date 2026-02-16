<?php
require_once __DIR__ . "/db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST['id'];

    $sql = "UPDATE tickets SET status='Closed' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../frontend/dashboard.html");
        exit();
    } else {
        echo "Error updating ticket: " . $conn->error;
    }
}
?>
