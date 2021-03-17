<?php
require_once 'connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query = "SELECT * FROM history_table where ID = 6;";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$row = mysqli_fetch_row($result);

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

// закрываем подключение
mysqli_close($link);
?>
