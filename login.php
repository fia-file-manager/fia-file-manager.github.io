<?php
$login = "Не известно";
$password = "Не известно";
$send = 0;
if (isset($_GET['send'])) $send = $_GET['send'];
if($send == 1){
    if(isset($_GET['login'])) $login = htmlentities($_GET['login']);
    if (isset($_GET['password'])) $password = htmlentities($_GET['password']);
    echo "Ваш логин: $login  <br> Ваш пароль: $password";
}
else{
        echo "Данные не отправлены";
}
?>