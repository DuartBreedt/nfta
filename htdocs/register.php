<?php

	include 'connect-to-database.php'; 
	
	$firstname = $_POST['firstname'];
	$firstname[0] = $firstname[0].toupper();
	$lastname = $_POST['lastname'];
	$lastname[0] = $lastname[0].toupper();
	$cell = $_POST['cell'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql =	"SELECT * FROM $usersTbl WHERE
			email='".$email."'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		echo "<div class='message-box alert alert-danger'><strong>Failed!</strong> This Email Already Exists.</div>";
	} else {

		$sql = "INSERT INTO $usersTbl(firstname, lastname, password, email, cell, profile_img) VALUES('".$firstname."', '".$lastname."', '".$password."', '".$email."', '".$cell."','images/users/default-profile.png')";

		if(mysqli_query($conn, $sql)){
			$sql =	"SELECT * FROM $usersTbl WHERE
			email='".$email."'";

			$result = mysqli_query($conn, $sql);
			$ass = mysqli_fetch_assoc($result);

			$_SESSION['userid'] = $ass["user_id"];
			$_SESSION['firstname'] = $ass["firstname"];
			
		} else{
			echo "<div class='message-box alert alert-danger'><strong>Failed!</strong> An error occured. Send the following message to your club administrator:<br/>". mysqli_error($conn)."</div>";
		}
	}

	mysqli_close($conn);

	header('Location: profile.php');
	
?>