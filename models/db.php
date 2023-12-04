<?php
// Сохранение данных в базу данных
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'only';
    
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    if (!$connection) {
        die('Ошибка подключения к базе данных: ' . mysqli_connect_error());
    }
    
    $query = " SELECT 1 FROM information_schema.tables WHERE table_schema = 'only' AND table_name = 'users' LIMIT 1";
    $result = mysqli_query($connection, $query);

    
    if (mysqli_num_rows($result) < 1) {//если таблица не существует, те первое обращение, то создать ее
        $query = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            tel VARCHAR(20) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            UNIQUE (name),
            UNIQUE (tel),
            UNIQUE (email)
        )";

        mysqli_query($connection, $query);
    }
