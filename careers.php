<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Custom fonts -->
    <script src="https://use.typekit.net/jim6vhf.js"></script>
    <script>try { Typekit.load({ async: true }); } catch (e) { }</script>

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
    <!-- <nav class="navbar navbar-inverse navbar-static-top"> -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="text-center">
                <h3><img alt="UCL Law Soc" src="images/lawsoclogo.png" /> &nbsp; sponsored by &nbsp; <img style="padding: 5px;" alt="Herbert Smith Freehills" src="images/sponsors/logo-herbert-smith.gif"/></h3>
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
                    <li class="active"><a href="careers.php">CAREERS</a></li>
                    <li><a href="barcareers.php">BAR CAREERS</a></li>
                    <li><a href="competitions.php">COMPETITIONS</a></li>
                    <li><a href="silkyb.php">SILK v BRIEF</a></li>
                    <li><a href="sports.php">SPORTS</a></li>
                    <li><a href="probono.php">PRO BONO</a></li>
                    <li><a href="representatives.php">REPS</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="fahadscorner.php">FAHAD'S CORNER</a></li>
                    <li><a href="prospectus.php">PROSPECTUS</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div>
                    <img class="img-responsive" src="images/careers_banner.jpg" />
                </div>
            </div>

            <div class="col-md-5">
                <h2 class="law-header">Next Internal Event</h2>
                <?PHP
                $number=1;
                $category=21;
                $template="Latest";
                require './content/show_news.php';
                ?>
            </div>
            <div class="col-md-5">
                <h2 class="law-header">Next External Event</h2>
                <?PHP
                $number=1;
                $category=20;
                $template="Latest";
                require './content/show_news.php';
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <h1 class="law-header">Careers Programme</h1>
                <?PHP
                $number=1;
                $category=6;
                require './content/show_news.php';
                ?>
            </div>
            <div class="col-md-10">
                <h3 class="law-header">Careers Calendar</h3>
                <p>The 2015/16 Careers calendar is coming soon.</p>
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
