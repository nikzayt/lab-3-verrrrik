
<?php
$array1 = [12, 23, 34];
$array2 = [45, 56, 67];
$mergedArray = array_merge($array1, $array2);
echo "Объединенный массив: [" . implode(', ', $mergedArray) . "]\n";
?>