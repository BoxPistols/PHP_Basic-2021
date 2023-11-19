<?php

declare(strict_types=1);

include 'header.php';
// echo "\n";
// $x = array(1, 2, 3);
// var_dump($x);
echo "\n<br>";
echo "\n";

// ----- Lesson -----
// $scores = array(30, 40, 50);
/*
$scores = [30, 40, "50"];
$scores3 = [
    "car" => 100,
    "train" => 200,
    "airplane" => 300,
];
echo $scores3["car"] . PHP_EOL;
echo "\n<br>";

$scores2 = [
    "first" => 90,
    "second" => 40,
    "third" => 100,
    ...$scores,
    ...$scores3
];
foreach ($scores2 as $key => $score) {
    echo "$key: $score" . PHP_EOL . "\n<br>";
}
echo "\n<br>";
*/
// ----- // Lesson -----


// ----- Lesson -----
// declareは型の厳密さを指定する
// 型として、$scoreにint型を指定し、返り値にstring型を指定
/*
function getAward(int $score): ?string
{
    return $score >= 100 ? 'Gold Medal' : null;
}
echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;

/*
function sum(string $a, int $b)
{
    return ($a + $b) < 10 ? null : "10より大きい";
}
echo "sum" . ": " . sum(2, "4");
*/

// ----- // Lesson -----


// ----- Lesson -----
/*
function sum($a, $b)
{
    // global $rate;
    $rate = 1.1;
    return ($a + $b) * $rate;
}

echo "rate" . ": " . sum(2, 8);
*/

// ----- // Lesson -----

echo "\n<br>";
echo "\n";
// ----- Lesson -----
/*
$n = mt_rand(1, 3);
if ($n === 1) {
    $message = '<script>alert(1);</script>UI/UXデザイナー見習いです';
} elseif ($n === 2) {
    $message = 'プログラミング勉強中です';
} else {
    $message = 'PHPちょっとわかります';
}

<!-- View -->
<!-- <p><?= $message; ?></p> -->
<p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
*/
