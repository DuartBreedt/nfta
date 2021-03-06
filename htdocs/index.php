<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NFTA | Home</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/global.js"></script>
        <script src="js/navigation.js"></script>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">

                <!-- MAIN NAVIGATION BAR -->
                <?php include "navigation.php"; ?>

                <div class="banner col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner-logo col-xs-2 col-sm-2 col-md-1 col-lg-1">
                        <img src="images/logo-w.png" alt="logo image"/>
                    </div>
                    <div class="banner-title col-xs-10 col-sm-10 col-lg-11 col-md-11">
                        <h1>The National Field Trial Association</h1>
                    </div>
                    <button class="btn btn-default btn-custom" data-toggle="modal" data-target="#tempModal">Click Me!</button>
                </div>

                <!-- IMAGE CAROUSEL -->
                <div id="myCarousel" class="carousel slide col-xs-12 col-sm-12 col-md-12 col-lg-12" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/img01.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="images/img02.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="images/img03.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="images/img04.jpg" alt="Flower">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row main">
            <h2>Summary</h2>
            <hr class="hr-spacer" />
                <p>
                    The first field trial in South Africa was held on the 3rd of August 1908, under the auspices of the newly formed South African Field Trial Club. The rules, standards, registrations and judging guidelines evolved over time under the stewardship of the club, with documents such as F.J. Finch Smith's 1916 "Training of Gundogs for South Africa" and H.W. Ardler's 1938 "Judging of Field Trial Dogs" serving as valuable benchmarks.
                    <br/><br/>
                    The Border Field Trial Club was founded in 1945 in Cathcart, an area with a long tradition of fine wing shooting. In 1971, The Natal Gundog Club hosted their first trial, with help and support from the SAFTC. The Rhodesian Field Trial Club was very much an item on the field trial circuit at the time.
                    <br/><br/>
                    In 1979, the National Field Trial Association (NFTA) was formed in an attempt to bring uniformity to the sport, and hosted its first National Field Trial in the same year. The National Field Trial Association is the controlling body of field trialling in South Africa. Since then various clubs have joined the NFTA, namely the Transvaal Hunt Point and Retrieve Field Trial Club, The Highveld Field Trial Club, The Western Cape Field Trial Club, The KZN HPR Club and The Central Field Trial Club. Sadly, there have also been withdrawals, most notably The South African Field Trial Club in 2010.
                    <br/><br/>
                    Various updates and revisions to the Constitution, Trial Conduct Regulations and Rules for Judging have been made over the years, notably 1971, 1978, 1991, 1999 and 2007. The primary objective of the National Field Trial Association is to promote and encourage the sport of field trialling in South Africa.
                </p>
            </div>
            <div class="row footer">
                <p>All Rights Reserved | 2017</p>
            </div>
        </div>

        <!-- TEMPORARY MODAL DELETE ON RELEASE -->
        <div id="tempModal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 80%;">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger">
                        <strong>Note:</strong> This website is for demo purposes only and does not necessary represent the final product.
                      </div>
                      <p>This demo only features a partial implementation of the final website. Therefore, many features are missing.</br>The available features are as follows:</p>
                      <ul>
                        <li>Users can register</li>
                        <li>Users can login</li>
                        <li>Users can view their own profile including their dogs, events and results</li>
                        <li>Users can logout</li>
                        <li>Users can use the menu to navigate to:
                          <ul>
                            <li>Home</li>
                            <li>Dogs</li>
                            <li>Nationals</li>
                            <li>WCFTC</li>
                            <li>BFTC</li>
                          </ul>
                        </li>
                        <li>Inside of a club users can navigate to:
                          <ul>
                            <li>Club Home</li>
                            <li>Club Events</li>
                            <li>Club Galleries</li>
                            <li>Club Members</li>
                          </ul>
                        </li>
                        <li>Inside of club events users can view individual events</li>
                        <li>Inside of each event users can:
                          <ul>
                            <li>View information concerning the event</li>
                            <li>Register their dogs to an event (provided they are registered and logged in)
                          </ul>
                        </li>
                      </ul>
                      <p>If you would like to effectively demo the ability to register dogs for particular events use the email address: kaleb@gmail.com and the password: Passw0rd</p>
                      <p>We regret to inform you that as of <strong>13 June 2017</strong> the developement of this website has ceased until further notice.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn orange-btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
