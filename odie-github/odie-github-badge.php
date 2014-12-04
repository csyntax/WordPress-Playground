<?php
/*
 	* Plugin Name: Odie - GitHub
 	* Description: GitHub plugin for WordPress
 	* Author: Ivan Ivanov
 	* Author URI: http://ivanov.bgschool.bg
 	* Version: 0.0.1 preview
 	* License: MIT
*/

class OdieGitHub {

	public function __construct() {
		add_action( 'init', array( $this, 'add_odie_gh_badge_shortcode' ) );
		add_action( 'widgets_init', array( $this, 'add_odie_gh_badge_widget' ) );		
		add_action( 'wp_enqueue_scripts', array( $this, 'odie_enqueue_style_css' ) );
	}	
	
	public function add_odie_gh_badge_widget() {
		include_once 'widgets/odie-github-badge-widget.php';
	}	

	public function add_odie_gh_badge_shortcode() {
		add_shortcode( 'odie_display_gh_badge', array( $this, 'odie_display_gh_badge' ) );
	}
	
    public function odie_display_gh_badge( $atts ) {
    	
    	extract( shortcode_atts( array(
			'user' 		=> '',
			'width' 	=> '200',
    		'height'	=> '127',
    		'border'	=> '0'
		), $atts ) );
		
    	$odieBadgeContent = '
	    	<iframe 
	    		src="http://githubbadge.appspot.com/' . $user . '?s=1&a=0" 
	    		style="
		    		width: ' . $width . 'px;
	    			height: ' . $height . 'px;
		    		border: ' . $border . ';
		    		overflow: hidden;
		    	" 
	    		frameBorder="0">
	    	</iframe>
    	';
    	
		return $odieBadgeContent;
    }    
   
    
	public function odie_enqueue_style_css() {
        wp_enqueue_style( 'odieghb-style', plugins_url( '/style/style.css' , __FILE__ ) );
        wp_enqueue_style( 'odieghb-style' );
    }    

}

$OdieGitHub =  new OdieGitHub();