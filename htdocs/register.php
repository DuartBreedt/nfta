<?php

	include 'phpEngine.php';
	
	$firstname = ucwords($_POST['firstname']);
	$lastname = ucwords($_POST['lastname']);
	$cell = $_POST['cell'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$club = $_POST['club'];
	$imgUrl = 'images/users/default-profile.png';

	if(isUser($email)){
		echo "<div class='message-box alert alert-danger'><strong>Failed!</strong> This Email Already Exists.</div>";
	} else {
		register($firstname, $lastname, $password, $email, $cell, $imgUrl, $club);
		initializeSession($email);
	}
	
?>