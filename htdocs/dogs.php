<?php include "phpEngine.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NFTA | Dogs</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <script src="js/global.js"></script>
        <script src="js/navigation.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">

                <!-- MAIN NAVIGATION BAR -->
                <?php include "navigation.php"; ?>

                <?php echo getAllDogs(); ?>

            </div>
        </div>
    </body>
</html>
