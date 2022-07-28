<?php
require "allVid.php";
function search($obj, $search)
{
	$vid_count = 0;
	echo "<div class=\"search\">";
	echo "<div class=\"serch-text\">По запросу <b> $search </b> найдены следующие видео: <br><br></div>";
	for ($g = 1; $g <= count($obj); $g++) {
		$el = $obj["video" . $g];
		for ($i = 0; $i < count($el["tags"]); $i++) {
			if ($el["tags"][$i] == $search) {
				$vid_count++;
				echo video_Url_to_html($el["video1url"]);
			}
		}
	}
	if ($vid_count == 0) {
		echo "<br>Видео по запросу<b>" . $search . "</b>не найдено!";
	} else {
		echo "<br>Всего найдено видео: $vid_count";
	}
	echo "</div>";
}