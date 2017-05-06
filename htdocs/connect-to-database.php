<?php

	// CONNECTION INFORMATION
	$username = "root";
	$password = "";
	$servername = "localhost";

	// DATABASE NAME
	$db = "nfta";

	// TABLE NAMES
	$usersTbl = "usersTable";
	$eventsTbl = "eventsTable";
	$resultsTbl = "resultsTable";
	$dogsTbl = "dogsTable";
	$galleriesTbl = "galleriesTable";
	$imagesTbl = "imagesTable";
	$competingTbl = "competingTable";

	$conn = mysqli_connect($servername, $username, $password, $db);

	if(!$conn){ die("Oops! Connection failed: ".mysqli_connect_error()); }

	if (session_status() == PHP_SESSION_NONE) {	session_start(); }
	if(isset($_SESSION["userid"])) { $uid = $_SESSION["userid"]; }

?>