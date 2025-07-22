<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $stmt = $db->prepare("UPDATE tasks SET title=? WHERE id=?");
    $stmt->execute([$title, $id]);
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM tasks WHERE id=?");
$stmt->execute([$id]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
<div class="container">
    <h1>Edit Task</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <div class="mb-3">
            <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
