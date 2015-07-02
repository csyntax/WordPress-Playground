<!doctype html>
<html <?php language_attributes(); ?>>
<head>    
    <meta charset="<?php bloginfo('charset');?>">		
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

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
</head>
<body <?php body_class(); ?>> 
        <header class="site-header">
            <div class="container">
		<div class="row">					
                    <hgroup class="col-sm-6 col-md-8">
                        <h1><?php bloginfo('name'); ?></h1>
                        <h2><?php bloginfo('description');?></h2> 
                    </hgroup>					
                    <div class="col-sm-6 col-md-4">						
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="150" >
                    </div>		
		</div>
            </div>
	</header>

    <header class="navbar-wrapper">

			<nav class="navbar navbar-inverse">
  				<div class="container-fluid">
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				        	<span class="sr-only">navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
      					</button>
      					<a class="navbar-brand" href="#">Меню</a>
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

	</header>