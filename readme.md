# HOW INSTALL
---
## ! Требования
* PHP 8.1
* XAMPP
* WINDOWS 11
---
1. Загрузите на локаль директорию Задание_2
2. Запустите XAMPP
3. Активируйте APACHE и  MySQL
4. Перейдите в панель администратора - http://localhost/phpmyadmin/index.php?
5. Выполните миграцию
```SQL
CREATE DATABASE SDO_2023;

USE SDO_2023;

CREATE TABLE users (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    password TEXT NOT NULL
);

CREATE TABLE posts (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

```
6. Перенестие директорию Задание_2 в директорию ***\xampp\htdocs, где `***` - часть пути до директории приложения XAMPP
## Сценарий использования
- http://localhost/project/index.php
*страница добавления объявлений доступна если Вы авторизовались или зарегистрировались*
