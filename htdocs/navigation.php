<?php 
if (session_status() == PHP_SESSION_NONE) { session_start(); }

$printString = '<nav class="main-nav col-md navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="message-box-container"></li>
                            <li class="nav-item">
                                <div class="search-div">
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
                            </li>';

if(isset($_SESSION['userid'])) {
    $printString .= '<li class="nav-item">
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a>
                    </li>';
} else {
    $printString .= '<li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pencil"></span> Register
                        </a>
                        <div class="dropdown-menu row">
                            <form name="registerForm" action="register.php" method="post">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="firstname">First name:</label>
                                    <input type="text" required class="form-control" name="firstname" id="firstname" placeholder="John"/>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="lastname">Last name:</label>
                                    <input type="text" required class="form-control" name="lastname" id="lastname" placeholder="Doe"/>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="email">Email address:</label>
                                    <input type="email" required class="form-control" name="email" id="email" placeholder="john.doe@gmail.com"/>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="cell">Cellphone:</label>
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="0787654321"/>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="Club">Club:</label>
                                    <select class="form-control" required name="club" id="club">
                                        <option disabled selected value> Select a club... </option>
                                        <option value="wcftc">WCFTC</option>
                                        <option value="nftc">NFTC</option>
                                        <option value="tvlftc">TVLFTC</option>
                                        <option value="bftc">BFTC</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="password">Create password:</label>
                                    <input type="password" required class="form-control" name="password" id="password" placeholder="********"/>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="confirm-password">Confirm password:</label>
                                    <input type="password" required class="form-control" name="confirm-password" id="confirm-password" placeholder="********"/>
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input type="submit" value="Register" class="btn btn-default"  />
                                </div>
                                <div id="register-message"></div>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Login
                        </a>
                        <div class="dropdown-menu row">
                            <form action="login.php" method="post" name="loginForm">
                                <div class="leftAlign">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" required name="email" id="email" placeholder="john.doe@gmail.com"/>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" required name="password" id="password" placeholder="********"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <input type="submit" value="Log in" class="btn btn-default" />
                                    </div>
                                    <div id="login-message"></div>
                                </div>
                            </form>
                        </div>
                    </li>';
}


            
$printString .= '<li class="dropdown nav-item">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dogs.php">Dogs</a></li>
                        <li><a href="national-events.php">National Events</a></li>
                        <li><a href="national-results.php">National Results</a></li>
                        <li><p>Clubs</p><hr/>
                            <ul>
                                <li><a href="wcftc.php">WCFTC</a></li>
                                <li><a href="nftc.php">NFTC</a></li>
                                <li><a href="tvlftc.php">TVLFTC</a></li>
                                <li><a href="bftc.php">BFTC</a></li>
                            </ul>
                            <hr/>
                        </li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>';

    echo $printString;

?>