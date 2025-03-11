<?php
$numbers = [1,1,2, 2, 3, 4, 4, 5];
$uniqueNumbers = array_unique($numbers);
$uniqueNumbers = array_values($uniqueNumbers); // Переиндексация массива

echo "Массив без дубликатов: [";
echo implode(", ", $uniqueNumbers); // Вывод элементов через запятую
echo "]";
?>