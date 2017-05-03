<?php

	include 'phpEngine.php';

	$emailVar = $_POST["email"];
	$passwordVar = $_POST["password"];

	if (!login($emailVar, $passwordVar))
		echo "<div class='message-box alert alert-danger'><strong>Failed!</strong> User Doesn't Exist. Please register first<br/>If you are already registered ensure you typed your Email and Password correctly<br/>If this problem persists contact your club administrator</div>";

	header('Location: profile.php');

?>