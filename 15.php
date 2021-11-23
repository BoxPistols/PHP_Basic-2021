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
	<h2>15</h2>
	<h3>File Upload</h3>

    <?php

$news = file_get_contents('data/news.txt');
echo $news;

// readfile('data/news.txt');

$news = $news . "<br>追加のニュース";
$success = file_put_contents('data/news.txt', $news);

// $success = file_put_contents('data/news.txt',
//     'ホ一ムページをリニューアルしました');

// if ($success != false) {
//     echo 'ファイルのアップロードに成功しました';
// } else {
//     echo 'ファイルのアップロードに失敗しました';
// }

?>


</body>

</html>
