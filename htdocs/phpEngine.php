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


	function getEventsForClub($clubVar) {

		$eventsTbl = $GLOBALS['eventsTbl'];
		$stmt = $GLOBALS["conn"]->prepare ( "SELECT * FROM $eventsTbl WHERE club=?" );
		$stmt->bind_param( "s", $clubVar); 
		$stmt->execute();

		$stmt->bind_result($eventid, $name, $desc, $date, $club);

		$retStr = "<ul class='list-group event-group'>";

		while ($stmt->fetch()) {
			$retStr .= "<li class='list-event-item list-group-item'><a href='event.php?id=".$eventid."'><p><span>NAME:</span> ".$name."</p><p><span>DESCRIPTION:</span> ".$desc."</p><p><span>DATE:</span> ".date("d M Y", strtotime($date))."</p></a></li>";
		}

		$retStr .= "</ul>";

		$stmt->close();
		$GLOBALS["conn"]->close();

		return $retStr;

	}

	function getEvent($id, &$nameVar, &$descVar, &$dateVar, &$clubVar) {

		$eventsTbl = $GLOBALS['eventsTbl'];
		$stmt = $GLOBALS["conn"]->prepare ( "SELECT * FROM $eventsTbl WHERE event_id=?" );
		$stmt->bind_param( "s", $id); 
		$stmt->execute();
		$stmt->bind_result($eventid, $name, $desc, $date, $club);
		$stmt->fetch();

		$nameVar = $name;
		$descVar = $desc;
		$dateVar = $date;
		$clubVar = $club;

		$stmt->close();
	}

	function getEventDogs($eventId) {

		$retStr = "";

		$dogsTbl = $GLOBALS['dogsTbl'];
		$usersTbl = $GLOBALS['usersTbl'];
		$eventsTbl = $GLOBALS['eventsTbl'];
		$competingTbl = $GLOBALS['competingTbl'];

		$sql = "SELECT * FROM $competingTbl INNER JOIN $dogsTbl ON $competingTbl.dog_id = $dogsTbl.dog_id 
											INNER JOIN $usersTbl ON $competingTbl.user_id = $usersTbl.user_id
											INNER JOIN $eventsTbl ON $competingTbl.event_id = $eventsTbl.event_id
											AND $competingTbl.event_id = $eventId";

		if($result = $GLOBALS["conn"]->query($sql)) {

			while($ass = $result ->fetch_assoc()) {
				$retStr .= $ass["fullname"]." ".$ass["callname"]." ".$ass["firstname"]." ".$ass["name"]." ".$ass["club"]." ".$ass["cell"]."\n";
			}

		} else { $retStr .= "No dogs found...";	}

		return $retStr;
	}

	function getEventResults($eventId) {

		$retStr = "";

		$dogsTbl = $GLOBALS['dogsTbl'];
		$usersTbl = $GLOBALS['usersTbl'];
		$eventsTbl = $GLOBALS['eventsTbl'];
		$resultsTbl = $GLOBALS['resultsTbl'];
		$competingTbl = $GLOBALS['competingTbl'];

		$sql = "SELECT * FROM $competingTbl INNER JOIN $dogsTbl ON $competingTbl.dog_id = $dogsTbl.dog_id 
											INNER JOIN $usersTbl ON $competingTbl.user_id = $usersTbl.user_id
											INNER JOIN $eventsTbl ON $competingTbl.event_id = $eventsTbl.event_id
											INNER JOIN $resultsTbl ON $competingTbl.dog_id = $resultsTbl.dog_id
											AND $competingTbl.event_id = $eventId";

		if($result = $GLOBALS["conn"]->query($sql)) {

			while($ass = $result ->fetch_assoc()) {
				$retStr .= $ass["fullname"]." ".$ass["callname"]." ".$ass["firstname"]." ".$ass["name"]." ".$ass["club"]." ".$ass["place"]."\n";
			}

		} else { $retStr .= "No results found...";	}

		return $retStr;
		
	}

	function getEventGalleries($eventId) {

		
		
	}


?>