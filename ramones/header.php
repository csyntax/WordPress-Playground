<!doctype html>
<html <?php language_attributes(); ?>>
<head>    
    <meta charset="<?php bloginfo('charset');?>">		
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">	 		
	<meta name="autor" content="Ivan Cvetomirov Ivanov">	
	<meta name="owner" content="Ivan Cvetomirov Ivanov">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="15 days">
	<meta name="google-site-verification" content="l4opVgCvWoKOkQYcTjoQSHQuftVgDhcneSa60BTdAxg">  	
	<meta name="description" content="Ivan Ivanov официален блог">
	<meta name="keywords" contnet="Ivanov, ivanov, ivan_tz, slayer11, Ivan Ivanov, Ivan Cvetomirov Ivanov, Иван Иванов, Иван, Иван Цветомиров Иванов, CSS, HTML5, CSS3, JavaScript, jQuery, AJAX">

	<title><?php wp_title('|', true, 'right'); ?></title>	
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kendo.common.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kendo.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kendo.common-bootstrap.min.css">	 
   	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">  
   	
   	<link rel="pingback" href="<?php bloginfo('pingback_url');?>"> 
	<link rel="home" href="<?php echo esc_url( home_url( '/' ));?>">
   	<link rel="profile" href="http://gmpg.org/xfn/11">  

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logos/ivanov.png">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/kendo.core.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>	
	<script>Modernizr.load();</script>		
	
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->   
    
    <?php wp_head(); ?>	
	
    <style scoped>
		/**WordPress - ivanov system**/
   		 html { margin-top: 0px !important; }
		* html body { margin-top: 0px !important; }	
    </style> 
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54020029-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body <?php body_class(); ?>> 
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P7DNHN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7DNHN');</script>
<!-- End Google Tag Manager -->

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
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/ivanov.png" alt="ivanov offical logo" width="0" height="0">
					</div>					
				</div>
			</div>
		</div>