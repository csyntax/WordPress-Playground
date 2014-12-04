<!doctype html>
<html <?php language_attributes(); ?>>
<head>    
    <meta charset="<?php bloginfo('charset');?>">		
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta http-equiv="cache-control" content="no-cache">	

	<title><?php wp_title('|', true, 'right'); ?></title>	
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">     
   	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">  
   	
   	<link rel="pingback" href="<?php bloginfo('pingback_url');?>"> 
	<link rel="home" href="<?php echo esc_url( home_url( '/' ));?>">
   	<link rel="profile" href="http://gmpg.org/xfn/11"> 

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>    
		
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->   
    
    <?php wp_head(); ?>		
    <style>
    	/*
    		Ivanov system 
    	*/		
		html { margin-top: 0px !important; }
		* html body { margin-top: 0px !important; }
    </style>
</head>
<body <?php body_class(); ?>> 
    <header class="navbar-wrapper">
	   <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">    
                 <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
						<span class="sr-only">Навигация</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand">Меню</span>
				</div>    
				<?php
					wp_nav_menu(array(
						'theme_location' => 'top',
						'container' => 'div',
						'container_class' =>'collapse navbar-collapse',
						'container_id' => 'nav',
						'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>'					
					));
				?>	
			</div>
		</nav>
	</header>	
	<div id="content">			
		<div class="jumbotron">
			<div class="container">
				<div class="row">					
					<hgroup class="col-sm-6 col-md-8">
						<h1><?php bloginfo('name'); ?></h1>
						<h2><?php bloginfo('description');?></h2> 
					</hgroup>					
					<div class="col-sm-6 col-md-4">						
						<img src="<?php echo get_template_directory_uri(); ?>/img/ivanov.png" class="img-responsive" width="250" alt="ivanov logo">
						
						<!--
							for seo
				
			
							<img src="<?php echo get_template_directory_uri(); ?>/img/logos/ivanov.png" alt="ivanov offical logo" width="0" height="0">
						-->
					</div>		
				</div>
			</div>
		</div>