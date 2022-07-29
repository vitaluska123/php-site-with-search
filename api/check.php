<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Links</title>
	<title>Результаты поиска</title>
	<link rel="stylesheet" href="/styles/check.css">
	<link rel="stylesheet" href="styleCheck.css">
	<!-- styleCheck.css -->
	<!-- /styles/check.css -->
</head>

<body>
	<div class="navbar">
		<h1 class="siteName" onclick="window.location.href='/'">Хранилище видео</h1>
	</div>
	<?php
	require(__DIR__ . '/php/search.php');
	$json = file_get_contents(__DIR__ . '/vid/vid.json');
	$obj = json_decode($json, true);
	search($obj, $_POST["searchTxt"]);
	?>
</body>

</html>