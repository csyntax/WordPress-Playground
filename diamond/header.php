<!doctype html>
<html <?php language_attributes();?> xmlns="http://www.w3.org/1999/xhtml">
<head>    
    <meta charset="<?php bloginfo('charset');?>">  
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>">	
	<?php wp_meta(); ?>
	
   	<title><?php wp_title('|', true, 'right'); ?></title>	
	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prism.min.css">	
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">    
    <link rel="profile" href="http://gmpg.org/xfn/11">  
	<link rel="home" href="<?php echo esc_url( home_url( '/' ));?>"> 		
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logos/ivanov.png">
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>	
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/prism.min.js"></script>   	
	
    <script>     	  
		Modernizr.load();    	
		Prism.highlightAll();		
		var precode = document.getElementById('pre');
			Prism.highlightElement(precode);
			
		if(window.location.protocol == 'file:'){
			throw new Error("ERROR: Bootstrap\'s responsive CSS is disabled!"); 
		}
		(function () {  
			if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
				var msViewportStyle = document.createElement('style')
				msViewportStyle.appendChild(
					document.createTextNode(
						'@-ms-viewport{width:auto!important}'
					)
				)
				document.querySelector('head').appendChild(msViewportStyle);
			}
		}).call(this);
		(function () {
			if (!Array.prototype.indexOf) {
				function arrayIndexOf(searchElement, fromIndex) {
					for (var i = fromIndex || 0; i < this.length; i++) {
						if (this[i] === searchElement) {
							return i;
						}
					}
					return -1;
				}
				Array.prototype.indexOf = arrayIndexOf;
			}
		}).call(this);
	</script>	
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/sizzle.min.js"></script>
    <![endif]-->
    <!--[if IE 7]><style type="text/css">.panel-body > ul{margin-left: -0.2em;} </style> <![endif]-->    
    <!--[if lt IE 7]><style type="text/css">body{display: none;}</style><![endif]-->
	
	<!--[if IE]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/qunit.min.css">	
		<script src="<?php echo get_template_directory_uri(); ?>/js/qunit.min.js"></script>
		<script>document.createElement('main');</script>
	 <![endif]-->
	
	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">	
	<a href="#main-content" class="sr-only sr-only-focusable">Към съдържанието</a>
	<img src="<?php bloginfo('template_url');?>/img/javascript-ninja.png" class="img-responsive js-ninja">
	<main class="container" id="main-content">
		<header>
			<hgroup>
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description');?></h2>    
			</hgroup>
			<img src="<?php header_image(); ?>" class="img-responsive img-rounded" id="header" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
		</header> 
			<div class="navbar-wrapper">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
								<span class="sr-only">Навигация</span>
								<span class="glyphicon glyphicon-tasks"></span>
							</button>
							<span class="navbar-brand">Меню</span>
						</div>
						<?php
							wp_nav_menu(array(
								'theme_location' => 'top',
								'container' => 'div',
								'container_class' =>'collapse navbar-collapse',
								'container_id' => 'navbar',
								'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>'					
							));
						?>					
					</div>
				</nav>
			</div>