<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Links</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="navbar">
		<h2 class="siteName">Хранилище видео</h2>
		<form name="search" action="check" method="post">
			<input class="searchText" type="text" name="searchTxt" placeholder="Поиск">
			<input class="searchButton" type="submit" name="go" value="Найти">
		</form>
	</div>

	<?php
	require(__DIR__ . '/php/allVid.php');

	$json = file_get_contents(__DIR__ . '/vid/vid.json');
	$obj = json_decode($json, true);
	vidCount($obj);
	PrintVideo($obj);

	?>
</body>

</html>