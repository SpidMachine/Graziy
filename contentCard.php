<?php
require_once "request.php";

echo "<div id='st-26-Ijuna' class='tabcontent'>";
echo "<div class='openedCardDiv'>";
echo "<img class='imgIntoCard' src='material/st-26-Ijuna.jpg' alt=''>";
echo "<div class='strDiscript'>";
echo  "<h4><b>" . $row[1] . "</b></h4>";
echo "<p>" . $row[2] . "</p>";
echo "<div class='container'>";
echo "<p>";
echo "<strong>Начинается: </strong>";
echo $row['name'] . "<br>";
echo "<strong>Заканчивается: </strong>";
echo $row[4] . "<br>";
echo "<strong>Найти на карте: </strong>";
echo "<a class=aContent' href='https://maps.tut.by/vitebsk/26-iyunya-ul/'>тут</a>";
echo "</p>";
echo "</div>";

echo "<p>";
echo "<img src='material/istoricheskaya-spravka.png' style='width: 29%;' alt=''><br>";
echo $row[5];
echo "</p>";
echo "</div>";
echo "</div>";
echo "</div>";
