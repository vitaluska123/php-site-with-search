<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Видео</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="/styles/index.css">
	<!-- style.css -->
	<!-- /styles/index.css -->
</head>

<body>
	<div class="navbar">
		<h2 class="siteName">Хранилище видео</h2>
		<form name="search" action="check" method="post">
			<input class="searchText" type="text" name="searchTxt" placeholder="Поиск">
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