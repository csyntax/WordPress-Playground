<?php get_header(); ?>       
	<div class="panel panel-default panel-body" id="wp-generate-content">
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
<?php get_footer();	?>