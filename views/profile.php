<?php
error_reporting(E_ALL);//показывать ошибки
ini_set('display_errors', 1);
//var_dump( $_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Редактирование личного профиля</h1>
    <form id="profileForm" action="../controllers/profile.php" method="POST"> <!-- перезагрузка страницы -->
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" placeholder="Кристина" value="<?=$_GET['name']; ?>"><br><br> <!-- из URL с параметрами строки запроса --> 

        <label for="tel">Телефон:</label>
        <input type="tel" name="tel" id="tel" placeholder="+7(999) 99-99-999" value="<?=$_GET['tel']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="test@test.ru" value="<?=$_GET['email']; ?>"><br><br>

        <label for="new_password">Новый пароль:</label>
        <input type="password" name="new_password" id="new_password" placeholder="Новый пароль"><br><br>

        <label for="password">Текущий пароль:</label>
        <input type="password" name="password" id="password"required placeholder="Текущий пароль"><br><br>
        
        <input type="hidden" name="id" value="<?=$_GET['id']; ?>">

        <input type="submit" value="Сохранить">
    </form>
</body>
</html>