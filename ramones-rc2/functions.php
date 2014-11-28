<?php
	//Register wp_menu
	register_nav_menu('top','top');
	
	//Main sidebar argumensts
	$sidebar_main = array(
			'name' => __('Main sidebar','ramones'),
			'description' => __( 'Main sidebar.','ramones'),
			'id' => 'sidebar-main',
			'before_widget' => '<aside class="panel panel-success">',
			'after_widget' => '</div></aside>',
			'before_title' => ' <div class="panel-heading"><span class="glyphicon glyphicon-pushpin"></span>',
			'after_title' => '</div><div class="panel-body">'
	);
	
	//Footer sidebar argumensts
	$sidebar_footer = array(
			'name' => __('Footer sidebar','ramones'),
			'description' => __( 'Footer sidebar.','ramones'),
			'id' => 'sidebar-footer',
			'before_widget' => '<div class="col-xs-12 col-xs-6 col-md-3">',
			'after_widget' => '</div>',
			'before_title' => '<p>',
			'after_title' => '</p>'
	);
	
	//Register main sidebar
	register_sidebar($sidebar_main);
	
	//Register footer sidebar
	register_sidebar($sidebar_footer);
	
	//Add theme to support feeds	
	add_theme_support('automatic-feed-links');
	
	//ramones title
	function ramones_wp_title( $title, $sep ) {
		global $paged, $page;

		if(is_feed()){ return $title; }
		
		$title .= get_bloginfo( 'name', 'display' );	
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ($site_description && ( is_home() || is_front_page())){		
			$title = "$title $sep $site_description";
		}		
		else if ($paged >= 2 || $page >= 2){
			$title = "$title $sep " . sprintf( __( 'Page %s', 'ramones' ), max( $paged, $page ) );
		}
		return $title;
	}	
	
	//Conect ramones title to wp_title()
	add_filter( 'wp_title', 'ramones_wp_title', 10, 2 );
	
	//Page posts nav
	function ramones_content_nav($id) {
		global $wp_query;
		$id = esc_attr($id);
		if ($wp_query->max_num_pages > 1){
			/*
				todo
				@include'inc/ramones_content_nav.php';
			*/
	?>
				<ul class="pager posts-nav">						
					<li class="previous">
						<?php
							next_posts_link( __( '<span class="meta-nav">&larr;</span> по-стари публикации', 'ramones' ) );
						?>
					</li>
					<li class="next"> 
						<?php
							previous_posts_link( __( 'по-нови публикации <span class="meta-nav">&rarr;</span>', 'ramones' ) ); 
						?>
					</li>
				</ul><?php			
			
		}		
	}