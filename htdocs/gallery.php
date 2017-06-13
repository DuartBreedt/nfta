<?php include "phpEngine.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Page Error</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <script src="js/global.js"></script>
        <script src="js/navigation.js"></script>
        <script src="js/clubs.js"></script>
        <script>
          function goBack() { window.history.back(); }
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body data-club="wcftc">
        <div class="container-fluid error-body">
              <h1>Oops! Looks like this page does not exist. Please <button class="btn btn-default btn-orange" onclick="goBack()">Go Back</button></h1>
        </div>
    </body>
</html>
