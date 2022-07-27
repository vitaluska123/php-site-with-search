<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Links</title>
</head>

<body>
	<?php

	require "./css-guide-.php";

	function video_Url_to_html($video)
	{
		return "<div class=\"video-div\"><iframe class=\"video\" width=\"500\" height=\"315\" src=\"$video\" title=\"YouTube video player\"frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen></iframe></div>";
	}
	function vidCount($css_guide)
	{
		echo "<div class=\"video-count\">Кол-во видео: " . count($css_guide) . "</div>";
	}
	function PrintVideo($css_guide)
	{
		for ($i = 1; $i <= count($css_guide); $i++) {
			echo video_Url_to_html($css_guide[$i]);
		}
	}


	vidCount($css_guide);
	PrintVideo($css_guide);
	?>

</body>

</html>