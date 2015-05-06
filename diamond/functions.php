<?php
	// Sidebar arguments 	
	$sidebar = array(
		'name' => __('Main sidebar','diamond'),		
		'description' => __( 'Main sidebar.','diamond'),
		'id' => 'sidebar-main',
		'before_widget' => '<aside class="panel panel-info">',
		'after_widget' => '</div></aside>',		
		'before_title' => ' <div class="panel-heading"><span class="glyphicon glyphicon-pushpin"></span>',
		'after_title' => '</div><div class="panel-body">'
	);	
	
	// Background arguments
	$background = array(
		'default-color' => 'white',
		'default-image' => '%s/img/background.gif',
		'wp-head-callback' => '_custom_background_cb'
	);
	
	// HTML5 support 
	$html5 = array(
		'header',
		'footer',
		'sidebar',
		'home',
		'sidebar',
		'search-form'
	);
	
	//Post types
	$post_types= array(
		'aside', 
		'image', 
		'video', 
		'audio',
		'link',
		'gallery'
	);	
	
	// Register dynamic WordPress menu(wp_nav_menu)
	register_nav_menu('top','top');	
		
	// Register dynamic WordPress sidebar
	register_sidebar($sidebar);	
	
	// Add theme to support WordPress custom background
	add_theme_support( 'custom-background', $background );
	
	// Add theme to support HTML5
	add_theme_support('html5', $html5);
	
	// Add theme to support Media post types
	add_theme_support( 'post-formats',$post_types);
	
	// Add theme to support WordPress dynamic Feed (RSS) links
	add_theme_support('automatic-feed-links');

	//Set theme to support post-thumbnails
	add_theme_support( 'post-thumbnails' );
	
	//Set the post-thumbnails size (width and height)
	set_post_thumbnail_size( 100, 100, true );	
	
	// Function to set wp_title();
	function diamond_wp_title( $title, $sep ) {
		global $paged, $page;

		if(is_feed()){ return $title; }
		
		$title .= get_bloginfo( 'name', 'display' );	
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ($site_description && ( is_home() || is_front_page())){		
			$title = "$title $sep $site_description";
		}		
		else if ($paged >= 2 || $page >= 2){
			$title = "$title $sep " . sprintf( __( 'Page %s', 'diamond' ), max( $paged, $page ) );
		}
		return $title;
	}	
	
	// Connect diamond_wp_title() to wp_title() whith filter
	add_filter( 'wp_title', 'diamond_wp_title', 10, 2 );
	
	// Connect theme to jetpack
	add_filter( 'jetpack_development_mode', '__return_true' );
	
	// Function to set meta data
	function diamond_wp_meta(){		
		echo '
			<meta http-equiv="cache-control" content="no-cache">
			<meta http-equiv="pragma" content="no-cache">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">  		
			<meta name="autor" content="Иван Цветомиров Иванов">	
			<meta name="owner" content="Иван Цветомиров Иванов">
			<meta name="robots" content="index, follow">
			<meta name="revisit-after" content="15 days">    
			<meta name="google-site-verification" content="22DVC-33GOOGLE-222">	
		';
	}
	
	//Connect diamond_wp_meta to wp_meta
	add_filter('wp_meta','diamond_wp_meta');
	
	// Content width
	if(!isset( $content_width )){
		$content_width = 900;
	}

	// Check WordPress version
	if (version_compare( $GLOBALS['wp_version'], '3.5', '<')) {
		$wp_version = false;
		echo 'Error WordPress < 3.5';
	}
	
	
	function diamond_content_nav( $html_id ) {
		global $wp_query;
		$html_id = esc_attr( $html_id );
		if ($wp_query->max_num_pages > 1): 
?>
	
		<ul class="pager posts-nav" id="<?php echo $html_id; ?>">			
			<li class="previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Стари публикации', 'diamond' ) ); ?></li>
			<li class="next"><?php previous_posts_link( __( 'Нови публикации <span class="meta-nav">&rarr;</span>', 'diamond' ) ); ?></li>
		</ul>

<?php		
	 endif;
	}
	
	