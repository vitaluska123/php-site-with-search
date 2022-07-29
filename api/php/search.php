<?php
require "allVid.php";
function search($obj, $search)
{
	$vid_count = 0;
	echo "<div class=\"search\">";
	echo "<div class=\"searchText\">По запросу <b> $search </b> найдены следующие видео:</div>";
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
		echo "<div class=\"video-count\"><br>Видео по запросу<b>" . $search . "</b>не найдено!<div>";
	} else {
		echo "<div class=\"video-count\"><br>Всего найдено видео: $vid_count<div>";
	}
	echo "</div>";
}