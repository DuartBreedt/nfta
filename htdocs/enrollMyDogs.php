<?php
	include 'phpEngine.php';

	$myDogsArr = $_POST["dogids"];
	$eventId = $_POST["eventid"];

	for ($i=0; $i < count($myDogsArr); $i++)
		enrollDog($myDogsArr[$i], $eventId);

?>