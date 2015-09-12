<?PHP

$skin_prefix = '';

// **********
// Skin MENU
// **********

$skin_menu = <<<HTML
<div id="body-wrapper">  
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Cutenews Admin Panel with Simpla Admin Theme</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="skins/ryhan.skin/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">     $username</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="$PHP_SELF?action=logout" title="Sign Out">Sign Out</a>
			</div>     

			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="$PHP_SELF?mod=main" class="nav-top-item no-submenu current"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li> 
					<a href="#" class="nav-top-item"> 
					Articles
					</a>
					<ul>
						<li><a href="$PHP_SELF?mod=addnews&action=addnews">Write a new Article</a></li>
						<li><a href="$PHP_SELF?mod=editnews&action=list">Edit Articles</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="$PHP_SELF?mod=categories">Manage Categories</a></li>
					</ul>
				</li>
				
				<li>
					<a href="$PHP_SELF?mod=options&action=personal" class="nav-top-item no-submenu">
						Profile
					</a>
				</li>
				
				<li>
					<a href="$PHP_SELF?mod=options&action=options" class="nav-top-item no-submenu">
						Options
					</a>
				</li>

				<li>
					<a href="#" class="nav-top-item">Addtional Features</a>
					<ul>
						<li><a href="$PHP_SELF?mod=more&do=stats">Advanced Statistics</a></li>
						<li><a href="$PHP_SELF?mod=more&do=spam">Manage Spam Protection (Captcha)</a></li>
						<li><a href="$PHP_SELF?mod=more&do=loginban">Login Bans</a></li>
						<li><a href="$PHP_SELF?mod=more&do=hardlog">Action Logs</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
				
		</div></div> <!-- End #sidebar -->

		<div id="main-content"> <!-- Main Content Section with everything -->
			<!-- Page Head -->
			<h2>{header-text}</h2>
			<p id="page-intro">What would you like to do?</p>	
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="$PHP_SELF?mod=addnews&action=addnews"><span>
					<img src="skins/ryhan.skin/images/icons/pencil_48.png" alt="icon" /><br />
					Write an Article
				</span></a></li>
				
				<li><a class="shortcut-button" href="$PHP_SELF?mod=editnews&action=list"><span>
					<img src="skins/ryhan.skin/images/icons/paper_content_pencil_48.png" alt="icons" /><br />
					Edit an Article
				</span></a></li>
				
				<li><a class="shortcut-button" href="$PHP_SELF?mod=images"><span>
					<img src="skins/ryhan.skin/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="skins/ryhan.skin/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="$PHP_SELF?mod=c4a" rel="modal"><span>
					<img src="skins/ryhan.skin/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->

			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
					
			<div class="clear"></div> <!-- End .clear -->

<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize; ">Content box</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" style="display: block; ">

						<table>
							<tbody>
			
HTML;

// ***********
// Skin HEADER
// ***********
$skin_header = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CuteNews</title>
<link rel="stylesheet" href="skins/ryhan.skin/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="skins/ryhan.skin/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="skins/ryhan.skin/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="skins/ryhan.skin/scripts/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="skins/cute.js"></script>
<script type="text/javascript" src="skins/ryhan.skin/scripts/simpla.jquery.configuration.js"></script>
</head>
<body>

{menu}


		
HTML;

// **************
// Skin FOOTER
// **************
$skin_footer = <<<HTML
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
				</div> <!-- End .content-box-content -->
</div>
			<div id="footer">
				<small>
						{copyrights}
				</small>
			</div><!-- End #footer -->
			
</body>
</html>
HTML;

?>