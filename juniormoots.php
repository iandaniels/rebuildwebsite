<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom fonts -->
    <script src="https://use.typekit.net/jim6vhf.js"></script>
    <script>try { Typekit.load({ async: true }); } catch (e) { }</script>

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
                    <li class="active"><a href="competitions.php">COMPETITIONS</a></li>
                    <li><a href="silkyb.php">SILK v BRIEF</a></li>
					<li><a href="sports.php">SPORTS</a></li>
                    <li><a href="probono.php">PRO BONO</a></li>
                    <li><a href="#">REPS</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="#">FAHAD'S CORNER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
		<div>
			<img class="img-responsive" src="images/banner_juniormooting.png" width="980" height="307" />
		</div>
	    <div class="row">
            <div class="col-md-10">
                <a href="competitions.php"><h4>&lt; Back</h4></a>
                <h1 class="law-header">Herbert Smith Freehills Junior Mooting Competition</h1>
				<?PHP
					$number=1;
					$category=10;
					require './content/show_news.php';
				?>
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
