<?php
require_once 'getAll.php'; // подключаем скрипт

echo "c";
foreach ($row as $rows) {

    echo "<div class='card' onclick=openCard(event, 'st-26-Ijuna')>";
    echo "<img src='material/st-26-Ijuna.jpg' alt='Avatar' style='width:100%; padding: 1%'>";
    echo "<div class='container'>";
    echo "<h4><b>" . $rows['name'] . "</b></h4>";
    echo "<span><strong>Начинается:</strong>";
    echo $rows['begins'] . "<br>";
    echo "<strong>Заканчивается:</strong>";
    echo $rows['ends'] . "</span>";
    echo "</div>";
    echo "</div>";
}
?>
