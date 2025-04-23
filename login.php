<?php
session_start();
include "db.php";

$name = $_POST['name'];
$pass = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM users WHERE name=?");
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($pass, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php");
} else {
    echo "Неверные данные";
}
?>
