<?php
include 'header.php';
?>

<?php
/*
### 変数
$age = 18;
if ($age >= 18) {
    echo "成人です";
} else {
    echo "未成年です";
}

echo "<br> \n";
$i = "1";
var_dump($i === 1);
*/

/* 
### isset empty is_null

$a = "1";
var_dump(isset($a));
echo "<br> \n";
// falsyな値は全てfalseと評価される
// if (isset($a)) {
if (!isset($a)) {
    echo "true";
} else {
    echo "false";
}
*/

// $i = 0;
// var_dump(empty($i));

### 配列
/*
$arr = ["a", "b", "c"];
// print_r($arr);
// var_dump($arr[1]);
$arr[1] = "Hi";
// add new element
$arr[] = "d";

// var_dump($arr);
// echo "<br> \n";
// echo $arr[1];

// for ($i = 0; $i < count($arr); $i++) {
//     echo $arr[$i];
//     echo "\n";
// }
foreach ($arr as $v => $k) {
    echo $k . "-" . $v;
    echo "\n<br/>";
}
*/

### key value

/*
$array = [
    ["table", 1000],
    ["chair", 500],
    ["bed", 10000],
];

// var_dump($array[0][0]);
// echo "<br> \n";
// var_dump($array[0][1]);

// $array[] = ["book", 100];
// $array[1][1] = 2800;

// shift これは最初の要素を削除する
// array_shift($array);
// pop これは最後の要素を削除する
// array_pop($array);
// splice これは指定した要素を削除する
array_splice($array, 1, 1);

foreach ($array as $v => $k) {
    echo $v . " - " . $k[0] . ": " . $k[1] . "円です";
    echo "\n<br/>";
}
*/

### 連想配列
// $assoc = [
//     "table" => 1000,
//     "chair" => 500,
//     "bed" => [
//         "single" => 10000,
//         "double" => 20000,
//     ],

// ];

// // var_dump($assoc["bed"]["single"]);
// // $assoc["bed"]["single"] += 12840;
// // var_dump($assoc["bed"]["single"]);

// // array_pop($assoc);

// unset($assoc["table"]);

// foreach ($assoc as $k => $v) {
//     if (is_array($v)) {
//         foreach ($v as $k2 => $v2) {
//             echo $k . " - " . $k2 . ": " . $v2 . "円です";
//             echo "\n<br/>";
//         }
//     } else {
//         echo $k . ": " . $v . "円です";
//         echo "\n<br/>";
//     }
// }

### データ型

$x = 5985;
var_dump($x);

?>
</body>

</html>