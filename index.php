<?php
include 'db.php';

$stmt = $db->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="p-4">
<div class="container">
    <h1 class="text-center mb-5">Task Manager</h1>

    <form action="add_task.php" method="POST" class="mb-3">
        <div class="input-group">
            <input type="text" name="title" class="form-control" placeholder="New Task" required>
            <button class="btn btn-primary" type="submit">Add Task</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= htmlspecialchars($task['title']) ?></td>
            <td>
                <form action="update_status.php" method="POST">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <select name="status" onchange="this.form.submit()" class="form-select <?php
                        if ($task['status']=='To Do') echo 'status-todo';
                        elseif ($task['status']=='In Progress') echo 'status-inprogress';
                        else echo 'status-done';
                    ?>">
                        <option <?= $task['status']=='To Do' ? 'selected' : '' ?>>To Do</option>
                        <option <?= $task['status']=='In Progress' ? 'selected' : '' ?>>In Progress</option>
                        <option <?= $task['status']=='Done' ? 'selected' : '' ?>>Done</option>
                    </select>
                </form>
            </td>
            <td>
                <a href="edit_task.php?id=<?= $task['id'] ?>" class="btn btn-sm btn-secondary">Edit</a>
                <a href="delete_task.php?id=<?= $task['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this task?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
