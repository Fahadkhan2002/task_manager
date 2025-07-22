<?php
include 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];
$stmt = $db->prepare("UPDATE tasks SET status=? WHERE id=?");
$stmt->execute([$status, $id]);

header('Location: index.php');
exit;
?>
