<?php
require_once(__DIR__ . "/db.php");



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM tickets WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../frontend/dashboard.html");
        exit();
    } else {
        echo "Error deleting ticket: " . $conn->error;
    }
}
?>
