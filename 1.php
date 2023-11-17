<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">
    <style>
        body {
            padding: 24px;
            font-weight: normal;
            font-size: 18px;
            line-height: 24px;
        }
    </style>
</head>

<body>
    <h1>PHPレッスン</h1>
    <h2>現在時刻</h2>
    <code>
        <pre>
        date_default_timezone_set("Asia/Tokyo");<br>
		echo date("G時i分s秒");
        </pre>
    </code>
    <section class="section">´
        <?php
        date_default_timezone_set("Asia/Tokyo");
        echo "時間" . date("G時i分s秒") . "<br>";

        // 曜日の取得

        // $week_name = ['日','月’,‘火’,'水','木','金' ,'土'];
        $weeks = ["日", "月", "火", "水", "木", "金", "土"];
        // echo $weeks[2] . '<br>';

        date_default_timezone_set("Asia/Tokyo");
        $week = date("w");
        echo "今日は" . $weeks[$week] . "曜日";

        echo "<br>";

        // $date = sprintf('%s', date('Y-m-d'));
        $date = sprintf("%04d.%02d.%01d	日.%01s", 2021, 3, 1, "金");
        echo $date;
        ?>
    </section>

</body>

</html>