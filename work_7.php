<?php
$string = "Это строчка из нескольких слов при поддержке BolgenOS :)";
$wordsArray = explode(" ", $string);
echo "Массив слов: [" . implode(", ", $wordsArray) . "]\n";
?>