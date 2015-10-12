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
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="socials.php">SOCIALS</a></li>
                    <li><a href="careers.php">CAREERS</a></li>
                    <li><a href="barcareers.php">BAR CAREERS</a></li>
                    <li class="active"><a href="competitions.php">COMPETITIONS</a></li>
                    <li><a href="silkyb.php">SILK v BRIEF</a></li>
                    <li><a href="#">OVERSEAS</a></li>
                    <li><a href="sports.php">SPORTS</a></li>
                    <li><a href="probono.php">PRO BONO</a></li>
                    <li><a href="#">YEAR REPS</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="#">FAHAD'S CORNER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <img class="img-responsive" src="images/banner_competitions.png" width="980" height="307" />
        </div>
        <div class="row">
            <div class="col-md-10">
                <h3>QUICK LINKS</h3>
            </div>
            <div class="col-md-10 col-lg-10">
                <div class="col-sm-6 col-md-4">
                    <a href="seniormoots.php">
                        <div class="thumbnail">
                            <img src="images/sponsors/SlaughterandMay.jpg" alt="Slaughter and May" />
                            <div class="caption text-center">
                                <h4>Senior Mooting Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="juniormoots.php">
                        <div class="thumbnail">
                            <img src="images/sponsors/HerbertSmith.jpg" alt="Herbert Smith Freehills" />
                            <div class="caption text-center">
                                <h4>Junior Mooting Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="clientinterviewing.php">
                        <div class="thumbnail">
                            <img src="images/sponsors/Macfarlanes.jpg" alt="Macfarlanes" />
                            <div class="caption text-center">
                                <h4>Client Interviewing Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="debating.php">
                        <div class="thumbnail">
                            <img src="images/sponsors/CliffordChance.jpg" alt="Clifford Chance" />
                            <div class="caption text-center">
                                <h4>Singles Debating Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="seniornegs.php">
                        <div class="thumbnail">
                            <img src="images/sponsors/ShearmanSterling.jpg" alt="Shearman & Sterling" />
                            <div class="caption text-center">
                                <h4>Senior Negotiations Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="juniornegs.php">
                        <div class="thumbnail">
                            <img src="images/sponsors/Simmons.jpg" alt="Simmons &amp; Simmons" />
                            <div class="caption text-center">
                                <h4>Junior Negotiations Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="teamdebating.php">
                        <div class="thumbnail">
                            <img src="images/logos/BLP_logo.png" alt="BLP Berwin Leighton Paisner" />
                            <div class="caption text-center">
                                <h4>Team Debating Competition</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <h3>COMPETITION OVERVIEW</h3>
                <?PHP
					$number=1;
					$category=8;
					require './content/show_news.php';
                ?>
            </div>
        </div>

        <!--
                <div class="row">
                    <div class="col-md-10">
                        <h3>COMPETITION CALENDAR</h3>

                        <iframe src="https://www.google.com/calendar/embed?src=6pd5souac7dekmoi8t1cn07hs0%40group.calendar.google.com&ctz=Europe/London" style="border: 0" width="935" height="600" frameborder="0" scrolling="no"></iframe>

                    </div>
                </div>
        -->

    </div>
    <footer class="footer navbar-inverse">
        <div class="container">
            <h2>footer</h2>
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
