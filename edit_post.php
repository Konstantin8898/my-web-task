<?php
session_start();
include "db.php";

$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    $stmt = $conn->prepare("UPDATE posts SET content=? WHERE id=? AND user_id=?");
    $stmt->bind_param("sii", $content, $id, $user_id);
    $stmt->execute();
    header("Location: dashboard.php");
} else {
    $stmt = $conn->prepare("SELECT content FROM posts WHERE id=? AND user_id=?");
    $stmt->bind_param("ii", $id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
}
?>

<form method="post">
    <textarea name="content"><?= htmlspecialchars($result['content']) ?></textarea><br>
    <button type="submit">Сохранить</button>
</form>
