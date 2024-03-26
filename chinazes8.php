<?php

function sumNumbers(...$numbers) {
    return array_sum($numbers);
}

// Пример использования функции с разным количеством аргументов
echo "Сумма чисел: " . sumNumbers(1, 2, 3, 4, 5) . "<br/>";
echo "Сумма чисел: " . sumNumbers(10, 20, 30) . "<br/>";
echo "Сумма чисел: " . sumNumbers(2, 4) . "<br/>";
