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
		return $return;
	}


	function getEventsOfClub($clubVar) {

		$eventsTbl = $GLOBALS['eventsTbl'];
		$stmt = $GLOBALS["conn"]->prepare ( "SELECT * FROM $eventsTbl WHERE club=?" );
		$stmt->bind_param( "s", $clubVar);
		$stmt->execute();

		$stmt->bind_result($eventid, $name, $desc, $date, $club);

		$retStr = "";

		while ($stmt->fetch()) {
			$retStr .= "<li class='list-event-item list-group-item'><a href='event.php?id=".$eventid."'><p><span>NAME:</span> ".$name."</p><p><span>DESCRIPTION:</span> ".$desc."</p><p><span>DATE:</span> ".date("d M Y", strtotime($date))."</p></a></li>";
		}

		$stmt->close();

		if($retStr == "") { return "<p class='empty-page-message'>No events found...</p>"; }
		else { return $retStr = "<ul class='list-group event-group'>".$retStr."</ul>"; }
	}

	function getGalleriesOfClub($clubVar) {

		$galleriesTbl = $GLOBALS['galleriesTbl'];
		$stmt = $GLOBALS["conn"]->prepare ( "SELECT gallery_id,name,description FROM $galleriesTbl WHERE club=?" );

		$stmt->bind_param( "s", $clubVar);
		$stmt->execute();

		$stmt->bind_result($galleryid, $name, $desc);

		$retStr = "";

		while ($stmt->fetch()) {
			$retStr .= '<a class="gallery-window col-xs-12 col-sm-6 col-md-4 col-lg-3" href="gallery.php?id='.$galleryid.'">
				            <div class="panel panel-default">
				            	<div class="panel-heading"><p>'.$name.'</p></div>
				                <div class="panel-body">
				                    <p class="event-description">
				                        '.$desc.'
				                    </p>
				                </div>
				            </div>
				        </a>';
		}

		$stmt->close();

		if($retStr == "") { return "<p class='empty-page-message'>No galleries found...</p>"; }
		else { return $retStr; }
	}

	function getMembersOfClub($clubVar) {

		$usersTbl = $GLOBALS['usersTbl'];
		$stmt = $GLOBALS["conn"]->prepare ( "SELECT user_id,firstname,lastname FROM $usersTbl WHERE club=?" );

		$stmt->bind_param( "s", $clubVar);
		$stmt->execute();

		$stmt->bind_result($userid, $firstname, $lastname);

		$retStr = "";

		while ($stmt->fetch())
			$retStr .= "<li class='list-member-item list-group-item'><a href='view-profile.php?id=".$userid."'><p><span>NAME:</span> ".$firstname." ".$lastname."</p></a></li>";

		$stmt->close();

		if($retStr == "") { return "<p class='empty-page-message'>No members found...</p>"; }
		else { return $retStr = "<ul class='list-group event-group'>".$retStr."</ul>"; }

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
				$dogid = $ass["dog_id"];
                $fullname = $ass["fullname"];
                $owner = $ass["firstname"]." ".$ass["lastname"];
				$retStr .= "<li class='list-member-item list-group-item'><a href='viewDog.php?id=".$dogid."'><p><span>NAME: </span> ".$fullname." <span>OWNER: </span> ".$owner."</p></a></li>";
			}

		}
		if($retStr == "") { return "<p class='empty-page-message'>No dogs found...</p>"; }
		else { return $retStr = "<ul class='list-group event-group'>".$retStr."</ul>"; }
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

		}
		if($retStr == "") { return "<p class='empty-page-message'>No results found...</p>"; }
		else { return $retStr; }

	}

	function getEventGalleries($eventId) {

		$retStr = "";

		$eventsTbl = $GLOBALS['eventsTbl'];
		$galleriesTbl = $GLOBALS['galleriesTbl'];

		$sql = "SELECT * FROM $eventsTbl	INNER JOIN $galleriesTbl ON $eventsTbl.event_id = $galleriesTbl.event_id
											AND $eventsTbl.event_id = $eventId";

		if($result = $GLOBALS["conn"]->query($sql)) {

			while($ass = $result ->fetch_assoc()) {
				$retStr .= '<a class="gallery-window col-xs-12 col-sm-6 col-md-4 col-lg-3" href="gallery.php?id='.$ass["gallery_id"].'">
				            <div class="panel panel-default">
				            	<div class="panel-heading"><p>'.$ass["name"].'</p></div>
				                <div class="panel-body">
				                    <p class="event-description">
				                        '.$ass["description"].'
				                    </p>
				                </div>
				            </div>
				        </a>';
			}

		}
		if($retStr == "") { return "<p class='empty-page-message'>No galleries found...</p>"; }
		else { return $retStr; }

	}

	function getMyDogsCompeting ($club) {

		$userid = $_SESSION["userid"];
		$dogsTbl = $GLOBALS['dogsTbl'];

		$stmt = $GLOBALS["conn"]->prepare ( "SELECT dog_id,fullname FROM $dogsTbl WHERE user_id=? AND club=?" );

		$stmt->bind_param( "ss", $userid, $club);
		$stmt->execute();

		$stmt->bind_result($dogid, $name);

		$retStr = "";

		while ($stmt->fetch()) {
			$retStr .= '<li class="list-group-item"><input type="checkbox" name="my-dogs" id="'.$dogid.'" value="'.$dogid.'"> <label for="'.$dogid.'">'.$name.'</label></li>';

		}

		$stmt->close();

		if($retStr == "") { return "<p class='empty-page-message'>No dogs found...</p>"; }
		else { return '<ul class="list-enroll list-group">'.$retStr.'</ul>'; }
	}

	function enrollDog($dogid, $eventid) {
		$competingTbl = $GLOBALS['competingTbl'];
		$stmt = $GLOBALS["conn"]->prepare("INSERT INTO $competingTbl(dog_id, event_id, user_id) VALUES(?,?,?)");
		$stmt->bind_param("sss", $dogid, $eventid, $_SESSION["userid"]);
		$stmt->execute();
		$stmt->close();
	}


?>
