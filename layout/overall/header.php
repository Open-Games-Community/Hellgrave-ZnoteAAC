
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Hellgrave Server</title>

<link rel='stylesheet'  href='layout/main_css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_frontend_styles-css'  href='layout/main_css/woocommerce.css?ver=3.5.2' type='text/css' media='all' />
<script type='text/javascript' src='layout/main_js/jquery.js?ver=1.8.3'></script>
<script type='text/javascript' src='layout/main_js/pagination.js?ver=3.5.2'></script>
<script type='text/javascript' src='layout/main_js/main.js?ver=3.5.2'></script>
<script type='text/javascript' src='layout/main_js/superfish.js?ver=1.4.8'></script>
<script type='text/javascript' src='layout/main_js/jquery.cycle.all.js?ver=2.9999'></script> 
<link rel='prev' title='Thank you' href='http://demo.lethemes.com/?page_id=138' />
<link rel='next' title='Page with right sidebar' href='http://demo.lethemes.com/?page_id=248' />

						<link href="http://fonts.googleapis.com/css?family=PT Serif&subset=latin,cyrillic" rel="stylesheet" type="text/css" />
			<style id="gglFontheading"> h1, h2, h3, h4, h5, h6 { font-family: "PT Serif"} input[name="heading"] { font-family: "PT Serif"}</style>
				<link href="http://fonts.googleapis.com/css?family=PT Serif&subset=latin,cyrillic" rel="stylesheet" type="text/css" />
			<style id="gglFontbody"> body, input, textarea, select, code { font-family: "PT Serif"} input[name="body"] { font-family: "PT Serif"}</style>
				<link href="http://fonts.googleapis.com/css?family=PT Serif&subset=latin,cyrillic" rel="stylesheet" type="text/css" />
			<style id="gglFontmenu"> #header .menu, .readmore, #submit, .post-password-required form input[type=\"submit\"], .button { font-family: "PT Serif"} input[name="menu"] { font-family: "PT Serif"}</style>
		
	<style>
				#container {
			width:880px;
			margin-left:0px;
			margin-right:0px;
			float:left;
		}
	</style>

		
	<link rel="shortcut icon" href="layout/imgs/hellgrave_ice.png" type="image/x-icon" />
	<link rel="stylesheet" href="layout/main_css/mobile.css" type="text/css" media="screen and (min-width:240px) and (max-width:639px)" />
	<link rel="stylesheet" href="layout/main_css/tablet.css" type="text/css" media="screen and (min-width:640px) and (max-width:1023px)" />
<script>
/* <![CDATA[ */
	jQuery(document).ready(function() {
		jQuery('ul.menu').superfish({
		animation: {height:'show'},				
							autoArrows:  true,
			dropShadows: false, 
			speed: 500,
			delay: 800		});
		jQuery(window).load( function() {
		 jQuery('.slides').cycle({
			fx:'fade',
			timeout: 5000,
			speed:2000,
			next: '.slide-right',
			prev: '.slide-left',
			pager:  '.slider-previews', 
			pagerAnchorBuilder: function(idx, slide) { 	
				return '<img src="' + jQuery(slide).attr('src') + '" />'; 
			} 
		})
		});
	});
/* ]]> */
</script>



<!-- WooCommerce Version -->
<meta name="generator" content="WooCommerce 2.0.14" />

	<script>
		jQuery(document).ready(function() {
			jQuery('form').each(function() {
				jQuery(this).append("<input type='hidden' name='theme' value='tasight' />");
			});
		});
	</script>
	
</head>

<body class="home page page-id-198 page-template-default">
<div id="page">
<div class='top-fire'></div>
<div class='bottom-left-fire'></div>
<div class='bottom-right-fire'></div>
<div class='left-dragon'></div>
<div class='right-dragon'></div>
<div class='back'>

<div id="header">
	<div class="container top">
		
		
		<!-- Logo -->
				<div class="hd-left ltblock"  data-block="logo">
		<div id="logo" style="position:relative;left:155px">
<a href="home.php" title="LeThemes.com" rel="home"><img src="layout/imgs/hellgrave_ice.png" style="width:60px" /></a>
					</div></div>
				<!-- / Logo -->
			
			
			
		<!-- Main Menu -->
				<div class="hd-right ltblock"  data-block="main-menu">
		<div class="nav-menu" id="main-menu"><ul class="menu sf-js-enabled" id="menu-main-menu">
	<li class="current_page_item"><a href="#" onclick="return false;" title="Home">Home</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-181" id="menu-item-181"><a href="changelog.php">Changelog</a></li>

</ul>
</li>
		<li class="page_item menu-item-160"><a href="#" onclick="return false;">Community</a>
		<ul>
		<li class="menu-item-47"><a title="" href="forum.php">Forum</a>
		</li>
		<li class="menu-item-48"><a title="" href="#">Discord</a>
		</li>
	</ul></li>
		<li class="menu-item-51"><a title="Games" href="#">Library</a>
	<ul>
		<li class="menu-item-47"><a title="" href="guilds.php">Guilds</a>
		</li>
		<li class="menu-item-48"><a title="" href="guildwar.php">Guilds War</a>
		</li>
		<li class="menu-item-49"><a title="" href="highscores.php">Highscores</a>
		</li>
		<li class="menu-item-50"><a title="" href="deaths.php">Deaths</a>
		</li>
		<li class="menu-item-51"><a title="" href="killers.php">Killers</a>
		</li>
		<li class="menu-item-52"><a title="" href="powergamers.php">PowerGamers</a>
		</li>
		<li class="menu-item-53"><a title="" href="houses.php">Houses</a>
		</li>
		<li class="menu-item-54"><a title="" href="market.php">Market</a>
		</li>
		<li class="menu-item-54"><a title="" href="onlinelist.php">Who is Online?</a>
		</li>
	</ul>
	</li>
	<li class="menu-item-52"><a title="" href="#">Store</a>
	<ul>
		<li class="menu-item-47"><a title="" href="shop.php">Store</a>
		</li>
		<li class="menu-item-48"><a title="" href="buypoints.php">Buy Points</a>
		</li>
		<li class="menu-item-49"><a title="" href="auctionchar.php">Character Auction</a>
		</li>
	</ul>
	</li>
	<li class="menu-item-53"><a title="" href="#">My Account</a>
	<ul>
		<li class="menu-item-47"><a title="" href="login_1.php">Login</a>
		</li>
		<li class="menu-item-48"><a title="" href="myaccount.php">My Account</a>
		</li>
		<li class="menu-item-49"><a title="" href="register.php">Register</a>
		</li>
		<li class="menu-item-54"><a title="" href="helpdesk.php">Create a Ticket</a>
		</li>
	</ul>	
</ul>
</div>		</div>
				<!-- / Main Menu -->
		
		<div class='clear'></div>
		<div class='bottom-sec'>
		<!-- Search -->
				<div class="hd-left ltblock"  data-block="search">
		 
<form action="characterprofile.php" id="searchform" method="get" role="search"><div>
	<input autocomplete="off" type="text" name="name" id="src_name" class="search" placeholder="Name . . .">
	
</div></form>		</div>
				<!-- / Search -->
		
		
		
		<!-- Secondary Menu -->
				<div class="hd-right ltblock"  data-block="secondary-menu">
		<div id="secondary-menu" class="nav-menu"><ul class="menu sf-js-enabled">
		<li class="current_page_item"><a href="home.php" title="Home">Home</a>
		<li class="current_page_item"><a href="forum.php" title="Home">Forum</a>
		<li class="current_page_item"><a href="highscores.php" title="Home">Highscores&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; </a>
		<li class="current_page_item"><a href="serverinfo.php" title="Home">Serverinfo</a>
		<li class="current_page_item"><a href="downloads.php" title="Home">Downloads</a>
		<li class="current_page_item"><a href="myaccount.php" title="Home">My Account</a>
		<li class="current_page_item"><a href="login.php" title="Home">Login</a>
		<li class="current_page_item"><a href="register.php" title="Home">Register</a>

</li>
		
		</ul></div>		</div>
				<!-- / Secondary Menu -->
		</div>
		<div class='clear'></div>
	</div>
		
	<div class='header-block'>
		<div class='container'>
			<!-- Header Image -->
						<!-- / Header Image -->
			
			
			<!-- Slider -->
			  			  

<div id='slider' class="ltblock"  data-block="slider">
			<div class='slides'>
						<div class="slide">
			<img src="imgs/8.png"  alt="slide" />
			<div class="slide-meta">
				<div class='inner'>
					<h3>Slide 1</h3>
					<div class="desc">Add Text Here.</div>
					<a class="readmore" href="#">Read more</a>				
				</div>
			</div>
		</div>
			<div class="slide">
			<img src="imgs/9.png" alt="slide" />
			<div class="slide-meta">
				<div class='inner'>
					<h3>Slide 2</h3>
					<div class="desc">Add Text Here.</div>
					<a class="readmore" href="#">Read more</a>				
				</div>
			</div>
		</div>
			<div class="slide">
			<img src="imgs/2.png" alt="slide" />
			<div class="slide-meta">
				<div class='inner'>
					<h3>Slide 3</h3>
					<div class="desc">Add Text Here.</div>
					<a class="readmore" href="#">Read more</a>				
				</div>
			</div>
		</div>
			<div class="slide">
			<img src="imgs/7.png" alt="slide" />
			<div class="slide-meta">
				<div class='inner'>
					<h3>Slide 4</h3>
					<div class="desc">Add Text Here.</div>
					<a class="readmore" href="#">Read more</a>				
				</div>
			</div>
		</div>
			<div class="slide">
			<img src="imgs/1.png" alt="slide" />
			<div class="slide-meta">
				<div class='inner'>
					<h3>Slide 5</h3>
					<div class="desc">Add Text Here.</div>
					<a class="readmore" href="#">Read more</a>				
				</div>
			</div>
		</div>
				</div>
		</div>
			  			  <!-- / Slider -->
			
			<div class='clear'></div>
			
				

	
<div id="post-198" class="post-198 page type-page status-publish hentry entry instock">


	<h1 class="post-title"></h1>


	<div class="post-body">
			<div class="cols two-left" style="text-align:center">