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
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">    
    <link rel="profile" href="http://gmpg.org/xfn/11">  
	<link rel="home" href="<?php echo esc_url( home_url( '/' ));?>"> 		
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logos/ivanov.png">
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>	
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>  	
	
	<!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 7]><style type="text/css">.panel-body > ul{margin-left: -0.2em;} </style> <![endif]-->    
    <!--[if lt IE 7]><style type="text/css">body{display: none;}</style><![endif]-->
	
	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">	
	<a href="#main-content" class="sr-only sr-only-focusable">Към съдържанието</a>
	<main class="container" id="main-content">
		<header>
			<hgroup>
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description');?></h2>    
			</hgroup>
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