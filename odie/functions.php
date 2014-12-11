<?php
	/*
		@version 0.0.1 preview
		@autor Ivan Cvetomirov Ivanov	
	*/

	//Register wp_menu
	register_nav_menu('top','top');
	
	// Sidebar argumensts
	$sidebar_main = array(
		'name' => __('Main sidebar','odie'),
		'description' => __( 'Main sidebar.','odie'),
		'id' => 'sidebar-main',
		'before_widget' => '<aside class="panel panel-success">',
		'after_widget' => '</div></aside>',
		'before_title' => ' <div class="panel-heading"><span class="glyphicon glyphicon-pushpin"></span>  ',
		'after_title' => '</div><div class="panel-body">'
	);	
	
	//Register main sidebar
	register_sidebar($sidebar_main);
	
	//Add theme to support feeds	
	add_theme_support('automatic-feed-links');
	
	//odie title
	function odie_wp_title( $title, $sep ) {
		global $paged, $page;

		if(is_feed()){ return $title; }
		
		$title .= get_bloginfo( 'name', 'display' );	
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ($site_description && ( is_home() || is_front_page())){		
			$title = "$title $sep $site_description";
		}		
		else if ($paged >= 2 || $page >= 2){
			$title = "$title $sep " . sprintf( __( 'Page %s', 'odie' ), max( $paged, $page ) );
		}
		return $title;
	}	
	
	//Conect odie title to wp_title()
	add_filter( 'wp_title', 'odie_wp_title', 10, 2 );
	
	//Page posts nav
	function odie_content_nav($id) {
		global $wp_query;
		$id = esc_attr($id);
		if ($wp_query->max_num_pages > 1){		
			include'inc/odie_content_nav.phtml';		
		}		
	}

	// Check WordPress version
	if (version_compare( $GLOBALS['wp_version'], '3.5', '<')) {
		$wp_version = false;
		echo 'Error WordPress < 3.5';
	}