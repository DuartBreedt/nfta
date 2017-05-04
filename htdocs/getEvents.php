<?php

	include "phpEngine.php";

	$clubVar;
	$useridVar;
	$printString = "";

	if(isset($_POST["clubName"])) {	$clubVar = $_POST["clubName"]; } 
	else if(isset($_POST["userid"])) { $useridVar = $_POST["userid"]; }

	if($clubVar)
		$printString = getEventsForClub($clubVar);
	else if ($useridVar)
		$printString = getEventsForUser($useridVar);

	echo $printString;
	
?>