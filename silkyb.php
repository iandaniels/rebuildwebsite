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
                    <li class="active"><a href="silkyb.php">SILK v BRIEF</a></li>
                    <li><a href="sports.php">SPORTS</a></li>
                    <li><a href="probono.php">PRO BONO</a></li>
                    <li><a href="#">REPS</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="fahadscorner.php">FAHAD'S CORNER</a></li>
                    <li><a href="prospectus.php">PROSPECTUS</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <img class="img-responsive" src="images/banner_silkyb.png" width="980" height="307" />
        </div>

        <div class="row">
            <div class="col-md-10">
                <h1 class="law-header">Silk v Brief</h1>
            </div>
            <div class="col-md-4">
                <img src="images/silkyb/ashurstblog.png" width="305" height="50" />
                <?PHP
                $number=1;
                $template="AshurstBlog";
                $category=2;
                require './news/show_news.php';
                ?>

                <img src="images/silkyb/reedsmithblog.png" width="305" height="50" />
                <?PHP
                $number=1;
                $template="ReedSmithBlog";
                $category=1;
                require './news/show_news.php';
                ?>
            </div>

            <div class="col-md-6">
                <div data-configid="13146637/12002428" style="width:525px; height:693px;" class="issuuembed"></div>
                <script type="text/javascript" src="//e.issuu.com/embed.js" async></script>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <h3 class="law-header">Note from the Editor</h3>
                <p>
                    Welcome to Silk v Brief, the flagship publication of the UCL Law Society. Affectionately known
                    as &lsquo;Silky B&rsquo; and published twice a year, the magazine serves as an avenue to showcase
                    the many alternative talents of the students within the Society. If you're interested in knowing
                    more about the publication, sharing your work, or have any queries, feel free to contact me at

                    <a href="mailto:firoza.dodhi.14@ucl.ac.uk">firoza.dodhi.14@ucl.ac.uk</a>
                </p>
                <p>
                    Please note that all content (with the exception of content embedded from external sites and the
                    intellectual property of sponsors) is the copyright &copy; UCL Law Society. All rights reserved.
                </p>

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
