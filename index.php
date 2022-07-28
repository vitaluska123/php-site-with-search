<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Links</title>
</head>

<body>
	<?php

	$json = file_get_contents(__DIR__ . '/vid/vid.json');
	$obj = json_decode($json, true);


	function video_Url_to_html($video)
	{
		return "<div class=\"video-div\"><iframe class=\"video\" width=\"500\" height=\"315\" src=\"https://www.youtube.com/embed/$video\" title=\"YouTube video player\"frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen></iframe></div>";
	}
	function vidCount($css_guide)
	{
		echo "<div class=\"video-count\">Кол-во видео: " . count($css_guide) . "</div>";
	}
	function PrintVideo($obj)
	{
		for ($i = 1; $i <= count($obj); $i++) {
			echo video_Url_to_html($obj["video" . $i]);
		}
	}


	vidCount($obj);
	PrintVideo($obj);
	?>

</body>

</html>