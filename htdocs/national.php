<?php include "phpEngine.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NFTA | Nationals</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <script src="js/global.js"></script>
        <script src="js/navigation.js"></script>
        <script src="js/clubs.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body data-club="national">
        <div class="container-fluid">
            <div class="row">

                <!-- MAIN NAVIGATION BAR -->
                <?php include "navigation.php"; ?>

                <div class="club-banner col-xs-12 col-sm-12 col-md-12 col-lg-12"">
                    <div class="banner col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="banner-title col-xs-offset-4 col-xs-8 col-md-offset-4 col-sm-8 col-xs-offset-2 col-lg-10 col-xs-offset-2 col-md-10">
                            <h1>Nationals</h1>
                        </div>
                    </div>
                    <img src="images/banners/nationals.jpg" alt="Nationals image"/>
                </div>                
            </div>

            <div class="row club-nav">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="national.php" id="home-link">Club Home</a></li>
                            <li><a href="events.php" id="events-link">Events</a></li>
                            <li><a href="galleries.php" id="galleries-link">Galleries</a></li>
                            <li><a href="members.php" id="members-link">Members</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div id="loading" style="display:none;">
                <img src="images/ajax-loader.gif" alt="Loading" />
            </div>
            <div class="row club-main club-home">
                <h2>Summary</h2>
                <hr class="hr-spacer" />
                    <p>
                        Information about nationals
                    </p>
            </div>
            <div class="row club-main club-events"><?php echo getEventsOfClub("national"); ?></div>
            <div class="row club-main club-galleries"> <?php echo getGalleriesOfClub("national"); ?></div>
            <div class="row club-main club-members"><?php echo getMembersOfClub("national"); ?></div> 
            <div class="row footer">
                <p>All Rights Reserved | 2017</p>
            </div>

        </div>
    </body>
</html>