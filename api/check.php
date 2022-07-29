<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Links</title>
	<title>Document</title>
</head>

<body>
	<button onclick="window.location.href='/'">
		<p>Назад</p>
	</button>
	<?php
	require(__DIR__ . '/php/search.php');
	$json = file_get_contents(__DIR__ . '/vid/vid.json');
	$obj = json_decode($json, true);
	search($obj, $_POST["searchTxt"]);
	?>
</body>

</html>