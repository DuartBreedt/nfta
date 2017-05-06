<?php 
    
    include "phpEngine.php";

    $name = "";
    $desc = "";
    $date = "";
    $club = "";

    getEvent($_GET["id"], $name, $desc, $date, $club);
    $results = getEventResults($_GET["id"]);
    $galleries = getEventGalleries($_GET["id"]);
    $dogs = getEventDogs($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NFTA | Event</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/global.js"></script>
        <script src="js/navigation.js"></script>
        <script src="js/events.js"></script>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body data-event-id=<?php echo $_GET["id"] ?>>
        <div class="container-fluid">
            <div class="row">

                <!-- MAIN NAVIGATION BAR -->
                <?php include "navigation.php"; ?>

                <div class="profile-banner">
                    <h1><span><?php echo $name ?></span></h1>
                    <?php 
                        if(isset($_SESSION['userid'])) { echo '<button class="btn btn-default btn-custom" data-toggle="modal" data-target="#registerModal">Register a dog</button>'; }
                    ?>
                </div>

            </div>
            <div class="main event-main">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Description</h3></div>
                            <div class="panel-body">
                                <p class="event-description">
                                    <?php echo $desc ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Competing Dogs</h3></div>
                            <div class="panel-body">
                                <p class="event-description">
                                    <?php echo $dogs ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Results</h3></div>
                            <div class="panel-body">
                                <p class="event-description">
                                    <?php echo $results ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Galleries</h3></div>
                            <div class="panel-body">
                                <?php echo$galleries ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer">
                <p>All Rights Reserved | 2017</p>
            </div>
        </div>
        <div id="registerModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Which of your dogs should compete in this event?</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo getMyDogsCompeting($club); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn submit-register btn-default" data-dismiss="modal">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>