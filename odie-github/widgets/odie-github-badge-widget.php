<?php
    class Odie_GitHub_Widget extends WP_Widget {

        public function __construct() {
            $this->WP_Widget(
                'odie_github_widget',
                __( 'Odie GitHub Widget','odie'),
                array( 
            	   'classname' => 'odie_github_badge', 
            	   'description' => __( 'Odie GitHub Widget', 'odie' ) 
                )
            );
        }
   
        public function widget ($args,$instance) {
            extract($args);
       
            $widget_title = apply_filters( 'widget_title', $instance[ 'widget_title' ] );       
        
            $odieBadgeContent = '
	    	  <iframe 
	    		src="http://githubbadge.appspot.com/' . $instance['github_username'] . '?s=1&a=0" 
	    		style="
		    		width: ' . $instance["width"] .';
	    			height: ' . $instance["height"] . ';
		    		border: ' . $instance["border"] . ';
		    		overflow: hidden;
		    	" 
	    		frameBorder="0">
	    	  </iframe>
            ';    
        
            if ( !empty( $odieBadgeContent ) ) {
        	   echo $before_widget;
        	   if ( $widget_title ) {
        		  echo $before_title . $widget_title . $after_title;
        	   }
?>
        	<div class="odie_github_badge_widget">
        		<?php echo $odieBadgeContent; ?>
        	</div>
<?php
        		echo $after_widget;
        }
    }
   
        public function update ( $new_instance, $old_instance ) {
            $instance = $old_instance;

            $instance['widget_title'] = strip_tags( $new_instance['widget_title'] );
            $instance['github_username'] = strip_tags( $new_instance['github_username'] );
            $instance['width'] = strip_tags( $new_instance['width'] );
            $instance['height'] = strip_tags( $new_instance['height'] );
            $instance['border'] = strip_tags( $new_instance['border'] );
            
            return $instance;
        }
    
        public function form ( $instance ) {
        	$instance_defaults = array(
    			'widget_title' => '',
    			'github_username' => '',
    			'width' => '200px',
    			'height' => '127px',
    			'border' => '0'
    		);
    	
    	   $instance = wp_parse_args( $instance, $instance_defaults );

            $widget_title = esc_attr( $instance[ 'widget_title' ] );
            $github_username = esc_attr( $instance[ 'github_username' ] );
            $width = esc_attr( $instance[ 'width' ] );
            $height = esc_attr( $instance['height'] );
            $border = esc_attr( $instance['border'] );
?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
				<?php _e( 'Widget Title:', 'odie' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $widget_title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'github_username' ); ?>">
				<?php _e( 'GitHub Username:', 'odie' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'github_username' ); ?>" name="<?php echo $this->get_field_name( 'github_username' ); ?>" type="text" value="<?php echo $github_username; ?>" placeholder="Enter GitHub Username here" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'width' ); ?>"><?php _e( 'Width', 'odie' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'width' ); ?>" name="<?php echo $this->get_field_name( 'width' ); ?>" type="text" value="<?php echo $width; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php _e( 'Height', 'odie' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" type="text" value="<?php echo $height; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'border' ); ?>"><?php _e( 'border', 'odie' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'border' ); ?>" name="<?php echo $this->get_field_name( 'border' ); ?>" type="text" value="<?php echo $border; ?>" />
		</p>
<?php
    }
}

register_widget('Odie_GitHub_Widget');