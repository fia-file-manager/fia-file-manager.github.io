<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test PHP Site</title>
        <link rel="shortcut icon" href="favicon.png" type="image/png">
    </head>
    <body>
        <?php
            echo 'Введите ваши данные: </br>';
        ?>
        <form action="login.php" method="GET">
            Логин: <input type="text" name="login" /><br><br>
            Пароль: <input type="text" name="password" /><br><br>
            Отправлять данные: <input type="checkbox" name="send" value="1" /><br><br> 
            <input type="submit" value="Войти">
        </form>
    </body>
</html>