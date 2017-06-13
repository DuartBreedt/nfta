<?php include "phpEngine.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NFTA | Western Cape Club</title>

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
    <body data-club="wcftc">
        <div class="container-fluid">
            <div class="row">

                <!-- MAIN NAVIGATION BAR -->
                <?php include "navigation.php"; ?>

                <div class="club-banner col-xs-12 col-sm-12 col-md-12 col-lg-12"">
                    <div class="banner col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="banner-logo col-xs-4 col-sm-4 col-md-2 col-lg-2">
                            <img src="images/club-logos/wcftc.png" alt="logo image"/>
                        </div>
                        <div class="banner-title col-xs-8 col-sm-8 col-lg-10 col-md-10">
                            <h1>Western Cape Field Trial Club</h1>
                        </div>
                    </div>
                    <img src="images/banners/wcftc.jpg" alt="WCFTC image"/>
                </div>
            </div>

            <div class="row club-nav">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="wcftc.php" id="home-link">Club Home</a></li>
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
                      The Western Cape Field Trial Club is a club for Pointing Breed enthusiasts. If you own or want to own a working Pointing dog, then this is the club for you in the Western Cape!
                      <br/><br/>
                      We are a small club that offers a variety of field events for Pointing Breeds, which include the traditional British breed Pointers and Setters, and the Continental or HPR (Hunt, Point and Retrieve) breeds such as the German Shorthaired Pointer, German Wirehaired Pointer, Brittany, Viszla, Spinone, Weimaraner, etc. Our members come from a wide variety of backgrounds, but we all have in common our love for the dogs, birds, conservation and outdoors.
                      <br/><br/>
                      We hold 2 field trial competitions a year, one for the British Breeds, and one for the HPR Breeds. Field trial competitions are held on wild birds in a genuine hunting environment and format, and the dogs are judged on their ability to find and produce game for the handler. The judges look for top bird dogs with finding ability, manners and class. The HPR breeds are also judged on their retrieving abilities.
                      <br/><br/>
                      In addition to the field trials, we offer some training, tests and field meets. In the months preceding our field trials, we hold weekend surveys where dogs and handlers get to do the real thing in the field on wild birds.
                    </p>
            </div>
            <div class="row club-main club-events"><?php echo getEventsOfClub("wcftc"); ?></div>
            <div class="row club-main club-galleries"> <?php echo getGalleriesOfClub("wcftc"); ?></div>
            <div class="row club-main club-members"><?php echo getMembersOfClub("wcftc"); ?></div>
            <div class="row footer">
                <p>All Rights Reserved | 2017</p>
            </div>

        </div>
    </body>
</html>
