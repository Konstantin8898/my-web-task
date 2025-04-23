<?php
include "db.php";

$name = $_POST['name'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $pass);
$stmt->execute();

header("Location: index.php");
?>
