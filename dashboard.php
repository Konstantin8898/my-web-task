<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$result = $conn->query("SELECT * FROM posts WHERE user_id = $user_id ORDER BY created_at DESC");
?>

<h2>Личный кабинет</h2>
<a href="logout.php">Выйти</a>

<h3>Добавить пост</h3>
<form action="add_post.php" method="post">
    <textarea name="content" required></textarea><br>
    <button type="submit">Добавить</button>
</form>

<h3>Ваши посты:</h3>
<?php while($row = $result->fetch_assoc()): ?>
    <div>
        <p><?= htmlspecialchars($row['content']) ?></p>
        <a href="edit_post.php?id=<?= $row['id'] ?>">Редактировать</a>
        <a href="delete_post.php?id=<?= $row['id'] ?>">Удалить</a>
    </div>
<?php endwhile; ?>
