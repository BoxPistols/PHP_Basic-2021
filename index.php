<?php

declare(strict_types=1);

include 'header.php';
echo "\n<br>";
echo "\n";

// ----- Lesson -----
// 可変長引数
/*
function sum(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo sum(1, 3, 5) . PHP_EOL;
echo sum(4, 2, 5, 668) . PHP_EOL;
*/

// 合計と平均の２つを返す
function sumAndAverage(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    $average = $total / count($numbers);
    return [$total, $average];
}
[$sum, $average] = sumAndAverage(1, 3, 5);
echo "sum: " . $sum . PHP_EOL;
echo "average: " . $average . PHP_EOL;
echo "\n<br>";


list($sum, $average) = sumAndAverage(1, 3, 5);
echo "sum: " . $sum . PHP_EOL;
echo "average: " . $average . PHP_EOL;
echo "\n<br>";

// ----- // Lesson -----
