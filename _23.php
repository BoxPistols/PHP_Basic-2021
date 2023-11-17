<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    echo "<h2>hello!!</h2>";

    $i = 1;
    var_dump($i);

    echo "<hr>";

    $i = 1;
    $i += $i;
    var_dump($i);

    echo "<hr>";

    $j = $i++;
    var_dump($j);

    var_dump($i);
    var_dump($i);

    $i++;
    var_dump($i);

    $i--;
    $i--;
    $i--;
    var_dump($i);
    ?>
</body>

</html>