<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="The UCL Law Society">
    <meta name="author" content="The UCL Law Society">
    <!--<link rel="icon" href="favicon.ico">-->
    <link rel="icon" type="image/png" href="/images/icon.png" />

    <title>The UCL Law Society</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom-styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="text-center">
                <h3><img alt="UCL Law Soc" src="images/lawsoclogo.png" /></h3>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Project name</a>-->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="socials.php">SOCIALS</a></li>
                    <li><a href="careers.php">CAREERS</a></li>
                    <li><a href="barcareers.php">BAR CAREERS</a></li>
                    <li><a href="competitions.php">COMPETITIONS</a></li>
                    <li><a href="silkyb.php">SILK v BRIEF</a></li>
                    <li><a href="sports.php">SPORTS</a></li>
                    <li><a href="probono.php">PRO BONO</a></li>
                    <li><a href="#">REPS</a></li>
                    <li class="active"><a href="about.php">ABOUT</a></li>
                    <li><a href="#">FAHAD'S CORNER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <img class="img-responsive" src="images/banner_about.png" width="980" height="307" />
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-6">
                    <h3>ABOUT</h3>
                    <?PHP
                    $number=1;
                    $category=2;
                    require './content/show_news.php';
                    ?>
                </div>
                <div class="col-md-6">
                    <h3>COMMITTEE</h3>
                    <ul class="media-list committee">
                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/ryanchupresident.png" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Ryan Chu</h1>
                                <h2>President</h2>
                                <p><a href="mailto:ryan.chu.13@ucl.ac.uk">ryan.chu.13@ucl.ac.uk</a></p>
                                <p class="committee-role">General responsibility and oversight.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/charliecarmantreasuerer.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Charlie Carman</h1>
                                <h2>Treasurer</h2>
                                <p><a href="mailto:charles.carman.13@ucl.ac.uk">charles.carman.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for the Society's finances.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/hyerinparksecretary.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Hyerin Park</h1>
                                <h2>Secretary</h2>
                                <p><a href="mailto:hye.park.14@ucl.ac.uk">hye.park.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for the organisation of the Society.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/rorybuttlesocial.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Rory Buttle</h1>
                                <h2>Social Secretary</h2>
                                <p><a href="mailto:rory.buttle.14@ucl.ac.uk">rory.buttle.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising the Society's social calendar.</p>
                            </div>
                        </li>


                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/janalexandercareers.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Jan-Alexander Greiwe</h1>
                                <h2>Careers Secretary</h2>
                                <p><a href="mailto:jan-alexander.greiwe.14@ucl.ac.uk">jan-alexander.greiwe.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising of the Society's careers calendar.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/matthastingsbarcareers2.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Matt Hastings</h1>
                                <h2>Bar Careers Secretary</h2>
                                <p><a href="mailto:matthew.hastings.13@ucl.ac.uk">matthew.hastings.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising the Society's Bar careers calendar.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/anneenakelayseniormoot.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Anneena Kelay</h1>
                                <h2>Senior Moots Officer</h2>
                                <p><a href="mailto:anneena.kelay.13@ucl.ac.uk">anneena.kelay.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising the Senior Moots Competition and external moots.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/orestisshermanjuniormoot.png" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Orestis Sherman</h1>
                                <h2>Junior Moots Officer</h2>
                                <p><a href="mailto:orestis.sherman.14@ucl.ac.uk">orestis.sherman.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organisaing the Junior Moots Competition.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/roshnimehravocations.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Roshni Mehra</h1>
                                <h2>Vocational Officer</h2>
                                <p><a href="mailto:roshni.mehra.13@ucl.ac.uk">roshni.mehra.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising the Client Interviewing and Negotiations competitions.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/jamesbowlerspeaker.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>James Bowler</h1>
                                <h2>Speaker Secretary</h2>
                                <p><a href="mailto:james.bowler.13@ucl.ac.uk">james.bowler.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising both internal and external debating competitions.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/firozadodhipublications.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Firoza Dodhi</h1>
                                <h2>Publications Officer</h2>
                                <p><a href="mailto:firoza.dodhi.14@ucl.ac.uk">firoza.dodhi.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Editor of <em>Silk v Brief.</em></p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/godwintanoverseasrep.jpg"120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Godwin Tan</h1>
                                <h2>Overseas Officer</h2>
                                <p><a href="mailto:godwin.gelun.14@ucl.ac.uk">godwin.gelun.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for the well-being of overseas students.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/juliamartensprobono2.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Julia Martens</h1>
                                <h2>Pro Bono Officer</h2>
                                <p><a href="mailto:julia.martens.14@ucl.ac.uk">julia.martens.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising the Society's pro bono opportunities. </p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/charlieturnbullsports.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Charlie Turnbull</h1>
                                <h2>Sports Officer</h2>
                                <p><a href="charles.turnbull.12@ucl.ac.uk">charles.turnbull.12@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for organising the Society's sports teams.</p>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/zandergossfinalyearrep.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Zander Goss</h1>
                                <h2>Final Year Student Representative</h2>
                                <p><a href="mailto:alexander.goss.13@ucl.ac.uk">alexander.goss.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Society representative for final year students.</p> 
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/alistairho2ndyear.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Alistair Ho</h1>
                                <h2>Second Year Student Representative</h2>
                                <p><a href="mailto:alistair.ho.14@ucl.ac.uk">alistair.ho.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Society representative for second year students.</p>
                            </div>
                        </li>


                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/cathrynevanswebmaster.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Cathryn Evans</h1>
                                <h2>Webmaster</h2>
                                <p><a href="mailto:cathryn.evans.13@ucl.ac.uk">cathryn.evans.13@ucl.ac.uk</a></p>
                                <p class="committee-role">Responsible for the maintenance of the Society's website.</p>
                            </div>
                        </li>


                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/committee/rorybuttlefirst.jpg" width="120" height="120" />
                            </div>
                            <div class="media-body">
                                <h1>Rory Buttle</h1>
                                <h2>First Year Student Representative</h2>
                                <p><a href="mailto:rory.buttle.14@ucl.ac.uk">rory.buttle.14@ucl.ac.uk</a></p>
                                <p class="committee-role">Representative for first year students.</p>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
    <footer class="footer navbar-inverse">
        <div class="container">
            <h2>&nbsp;</h2>
            <p>&copy; UCL Law Society.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
