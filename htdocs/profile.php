<?php
	
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	
	if(!isset($_SESSION['userid']))
		header("Location:index.php");
	else {
		session_regenerate_id ();
		include 'phpEngine.php';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_SESSION["firstname"]; ?>'s Profile</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <script src="js/global.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<!-- MAIN NAVIGATION BAR -->
        <?php include "navigation.php"; ?>

		<div class="profile-banner">
			<h1>Hello <span><?php  echo $_SESSION["firstname"]?></span></h1>
		</div>
		<div class="container-fluid">
			<div class="profile-body row">
				<div class="my-dogs col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="panel panel-default card-box">
						<h2>My Dogs</h2>
						<hr/>
						<p>A list of all your dogs</p>
						<div>
							<ul class="list-group">
								<li class="list-group-item"><a href="#">Doggo</a></li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
								<li class="list-group-item">Doggo</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="my-events col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="panel panel-default card-box">
						<h2>My Events</h2>
						<hr/>
						<p>Events your dogs have participated in</p>
						<div>
							<ul class="list-group">
								<li class="list-group-item">That thing that you did</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="my-results col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="panel panel-default card-box">
						<h2>My Results</h2>
						<hr/>
						<p>The results of the events your dogs have participated in</p>
						<div>
							<ul class="list-group">
								<li class="list-group-item">May 2017 stuff</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>