<?php
$conn = new mysqli("localhost", "root", "", "SDO_2023");

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
