<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $stmt = $db->prepare("INSERT INTO tasks (title, status) VALUES (?, 'To Do')");
    $stmt->execute([$title]);
}

header('Location: index.php');
exit;
?>
