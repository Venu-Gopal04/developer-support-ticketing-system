<?php
require_once __DIR__ . "/db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    $sql = "INSERT INTO tickets (title, description, priority, status)
            VALUES ('$title', '$description', '$priority', 'Open')";

    if ($conn->query($sql) === TRUE) {
        // ✅ Redirect after success
        header("Location: ../frontend/dashboard.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
