<?php

	include 'connect-to-database.php';

	function isUser($emailVar) {
		
		$usersTbl = $GLOBALS['usersTbl'];
		if ($stmt = $GLOBALS["conn"]->prepare("SELECT * FROM $usersTbl WHERE email=?")) {

	        $stmt->bind_param("s", $emailVar);
	        if($stmt->execute()){

	        	$stmt->store_result();
	            $stmt->bind_result($userid, $firstname, $lastname, $email, $cell, $password, $image, $club, $admin);
	            $stmt->fetch();

	            if ($stmt->num_rows >= 1){ return true; }
	        }
	    }
	    return false;
	}

	function register($firstname, $lastname, $password, $email, $cell, $imgUrl, $club) {

		$usersTbl = $GLOBALS['usersTbl'];
		$stmt = $GLOBALS["conn"]->prepare("INSERT INTO $usersTbl(firstname, lastname, password, email, cell, profile_img, club) VALUES(?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssss", $firstname, $lastname, $password, $email, $cell, $imgUrl, $club);
		$stmt->execute();

		$stmt->close();
		$GLOBALS["conn"]->close();
	}

	function initializeSession($email) {

		$usersTbl = $GLOBALS['usersTbl'];
		if ($stmt = $GLOBALS["conn"]->prepare("SELECT * FROM $usersTbl WHERE email=?")){

	        $stmt->bind_param("s", $email);
	        if($stmt->execute()){

	            $stmt->bind_result($userid, $firstname, $lastname, $email, $cell, $password, $image, $club, $admin);
	            $stmt->fetch();

	            $_SESSION['userid'] = $userid;
				$_SESSION['firstname'] = $firstname;
	        } else {
	        	echo "<div class='message-box alert alert-danger'><strong>Failed!</strong> An error occured. Send the following message to your club administrator:<br/>". mysqli_error($conn)."</div>";
	        }
	    }
	    $stmt->close();
		$GLOBALS["conn"]->close();
	}

	function login($emailVar, $passwordVar) {

		$usersTbl = $GLOBALS['usersTbl'];
		$return = false;
		$stmt = $GLOBALS["conn"]->prepare ( "SELECT * FROM $usersTbl WHERE email=? AND password=?" );
		$stmt->bind_param( "ss", $emailVar, $passwordVar); 
		$stmt->execute();

		$stmt->bind_result($userid, $firstname, $lastname, $email, $cell, $password, $image, $club, $admin);

		if ($stmt->fetch()) {
			if($admin == 1) { $_SESSION["admin"] = true; }
			$_SESSION['userid'] = $userid;
			$_SESSION['firstname'] = $firstname;
			$return = true;
		}

		$stmt->close();
		$GLOBALS["conn"]->close();
		return $return;
	}



?>