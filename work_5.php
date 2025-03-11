<?php
$numbers = [1, 11, 111, 1111, 11111];
$reversedNumbers = array_reverse($numbers);
echo "Перевернутый массив: [" . implode(', ', $reversedNumbers) . "]";
?>