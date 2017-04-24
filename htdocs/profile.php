<?php
	
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	
	if(!isset($_SESSION['userid']))
		header("Location:index.html");
	else {
		session_regenerate_id ();
		include 'connect-to-database.php';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_SESSION["firstname"]; ?>'s Profile</title>
	</head>
	<body>

		<div class="profile-banner">
			<h1>Hello <span><?php  echo $_SESSION["firstname"]?></span></h1>
		</div>
		<div class="profile-nav">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
				    	<a class="navbar-brand" href="home.php"><img src="images/logo-light.png" alt="shutter logo" /></a>
				    </div>
					<ul class="nav navbar-nav">
						<li><a class="navBtn nav-home" href="home.php"><p>Home</p></a></li>
						<li class="active"><a href="profile.php" class="navBtn nav-profile"><div class="nav-profile-img" style="background-image: url('<?php echo $imgUrl ?>');"></div><p>My Profile</p></a></li>
						<li><a href="ads.php" class="navBtn nav-ads"><p>My Ads</p></a></li>
						<li><a href="customers.php" class="navBtn nav-ads"><p>My Customers</p><span class="nav-notifications-indicator"></span></a></li>
					</ul>
					<div class="search-div col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<form method="post" action="search.php" class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="search-query form-control" placeholder="Search" name="query">
								<div class="input-group-btn">
									<button class="btn search-btn btn-orange btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
							<div class="search-results">
								<ul class="list-group"></ul>
							</div>
						</form>
					</div>
					<div class="navbar-right-wrapper">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" class="rightNavBtn wishlistBtn" data-toggle="modal" data-target="#wishlistModal"><span class="glyphicon glyphicon-gift wishlistBtnIcon"></span><span class="wishlistBtnText"> Wishlist</span></a></li>
							<li><a href="logout.php" class="rightNavBtn logoutBtn"><span class=" glyphicon glyphicon-off logoutBtnIcon"></span> Log Out</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="profile-body">
			
		</div>

	</body>
</html>