<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Links</title>
	<style type="css/stylesheat"> </style>
</head>

<body>
	<form name="search" action="/check.php" method="post">
		<input type="text" name="searchTxt" placeholder="Поиск">
		<input type="submit" name="go" value="Найти">
	</form>

	<?php
	require(__DIR__ . '/php/allVid.php');

	$json = file_get_contents(__DIR__ . '/vid/vid.json');
	$obj = json_decode($json, true);
	vidCount($obj);
	PrintVideo($obj);
	?>
</body>

</html>