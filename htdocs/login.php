<?php

	include 'connect-to-database.php'; 

	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql =	"SELECT * FROM $usersTbl WHERE
			email='".$email."' AND
			password='".$password."'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$ass = mysqli_fetch_assoc($result);

		if($ass["admin"]) { $_SESSION["admin"] = true; }

		$_SESSION['userid'] = $ass["user_id"];
		$_SESSION['firstname'] = $ass["firstname"];
		
	} else {
		echo "<div class='message-box alert alert-danger'><strong>Failed!</strong> User Doesn't Exist. Please register first<br/>If you are already registered ensure you typed your Email and Password correctly<br/>If this problem persists contact your club administrator</div>";
	}
	mysqli_close($conn);

	header('Location: profile.php');

?>