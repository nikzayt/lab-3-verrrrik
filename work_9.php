<?php
$numbers = [10, 20, 30, 40, 50];
$searchValue = 30;
$index = array_search($searchValue, $numbers);
if ($index !== false) {
    echo "Элемент найден, его индекс: $index";
} else {
    echo "Элемент не найден";
}
?>