<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom fonts -->
    <script src="https://use.typekit.net/jim6vhf.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

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
                    <li class="active"><a href="index.php">HOME</a></li>
					<li><a href="#">NEWS</a></li>
                    <li><a href="socials.php">SOCIALS</a></li>
                    <li><a href="careers.php">CAREERS</a></li>
                    <li><a href="barcareers.php">BAR CAREERS</a></li>
                    <li><a href="competitions.php">COMPETITIONS</a></li>
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

        <!--<p>
            <img src="images/home_banner.png" />
        </p>-->

        <div class="row">
            <div class="col-md-6">
			    <h1>UCL Law Society</h1>
				<h3>Welcome</h3>
				<?PHP 
				  $number=1;
				  $category=1;
				  require './content/show_news.php';
				?>
            </div>
           <div class="col-md-6">
                <h3>Latest News</h3>
                <?PHP
					$number=3;
					$template="Latest";
					$category=3;
					require './content/show_news.php';
                ?>
            </div>
        </div>

    </div>

    <div class="container law-sponsor">
        <!-- Main component for a primary marketing message or call to action -->
        <h2>We Are Proudly Sponsored By</h2>
        <div class="row">
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.ashurst.com/trainees/" target="new"><img class="img-responsive" src="images/sponsors/Ashurst%20new.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.blplaw.com/trainee/" target="new"><img class="img-responsive" src="images/sponsors/BLP.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://gradsuk.cliffordchance.com/" target="new"><img class="img-responsive" src="images/sponsors/CliffordChance.jpg.png" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.cms-cmck.com/graduates" target="new"><img class="img-responsive" src="images/sponsors/CMS.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://careers.davispolk.com/" target="new"><img class="img-responsive" src="images/logos/dpw logo.JPEG" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.dentons.com/uk-graduates" target="new"><img class="img-responsive" src="images/sponsors/Dentons.jpg" /></a></div>

            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.dlapipergraduates.co.uk/" target="new"><img class="img-responsive" src="images/sponsors/DLAPiper.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://trainee.ffw.com/" target="new"><img class="img-responsive" src="images/logos/field fisher.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://freshfields.com/uktrainees" target="new"><img class="img-responsive" src="images/sponsors/Freshfields logo.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.herbertsmithgraduates.com/" target="new"><img class="img-responsive" src="images/sponsors/HerbertSmith.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://graduates.hoganlovells.com/" target="new"><img class="img-responsive" src="images/sponsors/Hogan%20Lovells.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://graduaterecruitment.irwinmitchell.com/" target="new"><img class="img-responsive" src="images/logos/irwin mitchell.jpg" /></a></div>

            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.jonesdaycareers.com/offices/office_landing.aspx?office=4" target="new"><img src="images/sponsors/JonesDay.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://law-school.kaplan.co.uk" target="new"><img src="images/logos/KLS_Logo.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.lw.com/londongraduates" target="new"><img src="images/sponsors/latham and watkins.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.macfarlanes.com/careers/trainee-solicitors.aspx" target="new"><img src="images/sponsors/Macfarlanes.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.mayerbrown.com/Careers/Europe/United-Kingdom/Graduate-Recruitment/" target="new"><img src="images/sponsors/Mayer%20Brown.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://trk.as/nabarro_UCL" target="new"><img src="images/sponsors/Nabarro.jpg" /></a></div>

            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.nortonrosefulbrightgraduates.com/en/united-kingdom" target="new"><img class="img-responsive" src="images/sponsors/norton rose fullbright.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.osborneclarke.com/trainees" target="new"><img class="img-responsive" src="images/logos/osborne clarke edit.jpg" /></a><a href="http://freshfields.com/uktrainees" target="new"></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.pinsentmasons.com/en/careers/graduate-careers/" target="new"><img class="img-responsive" src="images/sponsors/PinsentMasons.png" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.pwc.com/uk/careers/index.jhtml?WT.mc_id=university_ucl_lawsociety_webbanner_sept14" target="new"><img class="img-responsive" src="images/sponsors/PWC logo 2014.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://ukgraduates.shearman.com/"><img class="img-responsive" src="images/sponsors/ShearmanSterling.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://graduates.simmons-simmons.com/en/English-Graduate"><img class="img-responsive" src="images/sponsors/Simmons.jpg" /></a></div>

            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.slaughterandmay.com/careers/trainee-solicitors.aspx" target="new"><img class="img-responsive" src="images/sponsors/SlaughterandMay.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://graduate.taylorwessing.com/" target="new"><img class="img-responsive" src="images/sponsors/taylor wessing.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.traverssmith.com/careers/graduate-recruitment/" target="new"><img class="img-responsive" src="images/sponsors/TraversSmith.jpg" /></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://www.law.ac.uk/" target="new"><img class="img-responsive" src="images/logos/unilaw.png" /></a><a href="" target="new"></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"><a href="http://ukrecruiting.weil.com/" target="new"><img class="img-responsive" src="images/sponsors/Weil.jpg" /></a><a href="" target="new"></a></div>
            <div class="col-sm-4 col-xs-6 col-md-3"></div>
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
