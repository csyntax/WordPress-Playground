<?php get_header(); ?>       
	<div class="panel panel-default" id="wp-generate-content">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">				
					<?php get_sidebar();?>				
				</div>
				<div class="col-md-8">            
					<div class="posts">
						<?php
							if(have_posts()){
								while(have_posts()){
									the_post();								
									get_template_part('content'); 
								}
							}
			
						?>
					</div>					
				</div>
			</div>
		</div>		
		<?php
			diamond_content_nav( 'nav-below' ); 
		?>		
	</div>	
<?php get_footer();	?>