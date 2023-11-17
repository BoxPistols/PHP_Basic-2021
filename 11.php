<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">
    <style>
    body {
        padding: 4vw 8vh;
        font-weight: normal;
    }
    </style>
</head>

<body>
    <h1>PHPレッスン</h1>
    <h2>連想配列</h2>
    <h3>
        <?php
 $fruits = [
   "apple" => "りんご",
   "grape" => "ぶどう",
   "lemon" => "レモン",
 ];
 echo $fruits["lemon"];
 ?>
    </h3>

    <dl>
        <?php foreach ($fruits as $key => $value): ?>
        <dt><?php echo $key; ?></dt>
        <dd><?php echo $value; ?></dd>
    </dl>
    <?php endforeach; ?>


</body>

</html>