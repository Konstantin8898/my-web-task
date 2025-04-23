<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Авторизация</h2>
<form method="post" action="login.php">
    <input type="text" name="name" placeholder="Имя" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Войти</button>
</form>

<h3>Нет аккаунта?</h3>
<form method="post" action="register.php">
    <input type="text" name="name" placeholder="Имя" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Зарегистрироваться</button>
</form>
</body>
</html>
